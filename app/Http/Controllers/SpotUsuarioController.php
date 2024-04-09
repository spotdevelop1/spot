<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SpotUsuarioController extends Controller
{
    // Método para mostrar el formulario de búsqueda
    public function showSearchForm()
    {
        return view('pages.recharge');
    }

    // Método para buscar por ID de servicio y mostrar información
    public function searchById(Request $request)
    {
        $validatedData = $request->validate([
            'id_servicio' => 'required|numeric',
        ], [
            'id_servicio.required' => '¡Coloque su ID, el campo no puede ir vacío!', // Mensaje personalizado
            'id_servicio.numeric' => 'El ID de servicio debe ser un número.', // Otro mensaje personalizado
        ]);
    
        // Realiza la solicitud al endpoint de perfil del cliente para obtener los datos excepto el nombre
        $responsePerfil = Http::withHeaders([
            'Authorization' => 'Api-Key ' . env('WISPHUB_API_KEY'),
        ])->get(env('WISPHUB_BASE_URL') . "clientes/{$request->id_servicio}/perfil/");
    
        // Realiza una solicitud al endpoint de saldo para obtener la url_pago y ahora también el nombre
        $responseSaldo = Http::withHeaders([
            'Authorization' => 'Api-Key ' . env('WISPHUB_API_KEY'),
        ])->get(env('WISPHUB_BASE_URL') . "clientes/{$request->id_servicio}/saldo/");
    
        if ($responsePerfil->successful() && $responseSaldo->successful()) {
            $perfil = $responsePerfil->json();
            $saldoInfo = $responseSaldo->json();
    
            // Asigna el nombre basándote en la respuesta del endpoint de saldo
            // y los demás datos basados en el endpoint de perfil
            $servicio = [
                'id_servicio' => $perfil['id_servicio'],
                'nombre' => $saldoInfo['nombre'] ?? '',
                'telefono' => $perfil['telefono'] ?? '',
                'saldo' => $perfil['saldo'] ?? '0.00',
                'url_pago' => $saldoInfo['url_pago'] ?? '',
            ];
    
            return view('pages.result', ['servicio' => (object)$servicio]);
        } else {
            // Manejo de errores si alguna de las respuestas no es exitosa
            return back()->with('errorId', 'No se pudo obtener la información completa con ese ID de servicio.');
        }
    }
}
    
