<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Openpay\Data\Openpay;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session; // Importar el Facade de Session

class PaymentController extends Controller
{
    public function createCharge(Request $request)
    {
        // Inicializar OpenPay con la ID y la clave privada directamente desde el .env y el modo de producción forzado a true.
        $openpay = Openpay::getInstance(env('OPENPAY_ID_S'), env('OPENPAY_PRIVATE_API_KEY'));
        Openpay::setProductionMode(env('OPENPAY_PRODUCTION_MODE') === 'true');

        Log::info('Iniciando el proceso de createCharge.');

        try {

            // Preparación de datos del cliente para el cargo
            $customerData = array(
                'name' => 'Cliente',
                'last_name' => 'Prueba',
                'email' => 'cliente@example.com',
                'phone_number' => '1234567890',
            );


            // Log para registrar los datos del cliente preparados
            Log::info('Datos del cliente preparados para la creación de un cargo.', ['customerData' => $customerData]);

            // Preparación de los datos del cargo
            $chargeData = array(
                'method' => 'card',
                'amount' => (float)$request->input('amount', '500'), // Valor por defecto o especificado en la petición
                'description' => 'Descripción del cargo',
                'customer' => $customerData,
                'confirm' => false, // No confirmar el cargo automáticamente
                // 'redirect_url' => env('APP_URL') . '/payment/confirmation', // URL de redirección después del pago
                'redirect_url' => 'https://spot1mobile.com/', // URL de redirección después del pago
            );
            
            // Creación del cargo en Openpay y registro de la operación
            // $charge = $this->openpay->charges->create($chargeData);
            $charge = $openpay->charges->create($chargeData);
            // return $charge->id;
            // Log para confirmar la creación exitosa del cargo
            Log::info('Cargo creado con éxito en OpenPay.', ['chargeId' => $charge->id]);

            // Guardado del ID del cargo en sesión para su posterior consulta
            Session::put('chargeId', $charge->id);

            // Redirección al usuario al formulario de pago de Openpay
            return redirect()->to($charge->payment_method->url);
        } catch (\OpenpayApiTransactionError $e) {
            Log::error("Error de transacción en OpenPay: " . $e->getMessage(), $this->formatOpenpayError($e));
            return back()->withErrors('Error de transacción: ' . $e->getDescription());
        } catch (\OpenpayApiRequestError $e) {
            Log::error("Error de petición a OpenPay: " . $e->getMessage(), $this->formatOpenpayError($e));
            return back()->withErrors('Error de petición: ' . $e->getDescription());
        } catch (\OpenpayApiConnectionError $e) {
            Log::error("Error de conexión con OpenPay: " . $e->getMessage(), $this->formatOpenpayError($e));
            return back()->withErrors('Error de conexión con OpenPay.');
        } catch (\OpenpayApiAuthError $e) {
            Log::error("Error de autenticación con OpenPay: " . $e->getMessage(), $this->formatOpenpayError($e));
            return back()->withErrors('Error de autenticación con OpenPay.');
        } catch (\Exception $e) {
            Log::error("Error general en createCharge: " . $e->getMessage(), ['exception' => $e]);
            return back()->withErrors('Error procesando el pago.');
        }
    }

    // Función auxiliar para formatear y registrar errores de Openpay
    private function formatOpenpayError($e)
    {
        return [
            'error_code' => $e->getErrorCode(),
            'error_category' => $e->getCategory(),
            'http_code' => $e->getHttpCode(),
            'request_id' => $e->getRequestId(),
        ];
    }

    public function handlePaymentConfirmation(Request $request)
    {// Recuperar el ID del cargo de la sesión
    $chargeId = Session::get('chargeId');

    // Añadir registro de inicio de confirmación de pago
    Log::info("Iniciando confirmación de pago con OpenPay.", [
        'charge_id' => $chargeId,
    ]);

    try {
        // Consulta el estado del cargo en Openpay
        $charge = $this->openpay->charges->get($chargeId);

        // Registro después de obtener el cargo
        Log::info("Cargo obtenido de OpenPay.", [
            'charge_id' => $chargeId,
            'charge_status' => $charge->status,
        ]);

        // Verifica el estado del cargo
        if ($charge->status == 'completed') {
            // Pago exitoso
            Log::info("Pago exitoso en OpenPay.", [
                'charge_id' => $chargeId,
            ]);
            return view('payment.success'); // Mostrar vista de pago exitoso
        } else {
            // Pago no completado
            Log::warning("Pago no completado en OpenPay.", [
                'charge_id' => $chargeId,
                'charge_status' => $charge->status,
            ]);
            return view('payment.failed'); // Mostrar vista de pago fallido
        }
    } catch (\OpenpayApiTransactionError $e) {
        Log::error("Error de transacción en OpenPay", [
            'error' => $e->getMessage(),
            'code' => $e->getErrorCode(),
            'charge_id' => $chargeId
        ]);
        return view('payment.error', ['error' => $e->getMessage()]);
    } catch (\OpenpayApiRequestError $e) {
        Log::error("Error de petición a OpenPay", [
            'error' => $e->getMessage(),
            'code' => $e->getErrorCode(),
            'charge_id' => $chargeId
        ]);
        return view('payment.error', ['error' => $e->getMessage()]);
    } catch (\OpenpayApiConnectionError $e) {
        Log::error("Error de conexión con OpenPay", [
            'error' => $e->getMessage(),
            'charge_id' => $chargeId
        ]);
        return view('payment.error', ['error' => $e->getMessage()]);
    } catch (\OpenpayApiAuthError $e) {
        Log::error("Error de autenticación con OpenPay", [
            'error' => $e->getMessage(),
            'charge_id' => $chargeId
        ]);
        return view('payment.error', ['error' => $e->getMessage()]);
    } catch (\Exception $e) {
        Log::error("Error no identificado", [
            'error' => $e->getMessage(),
            'charge_id' => $chargeId
        ]);
        return view('payment.error', ['error' => 'Ocurrió un error inesperado.']);
    }
}
}
