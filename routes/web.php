<?php

use App\Http\Controllers\SpotUsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BdInfoUsuariosController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return View::make('pages.content_index');
});

Route::get('/recarga', function(){
    return View::make('pages.recharge');
});

Route::get('/pago', function(){
    return View::make('pages.commerce');
})->name('pago');

Route::get('/planes', function(){
    return View::make('pages.planes');
});

// Nueva ruta agregada para la página del mapa
Route::get('/mapa', function(){
    return View::make('pages.map');
})->name('mapa');
Route::get('/csrf-token', function() {
    return csrf_token();
});

// Ruta para mostrar el formulario de recarga (si aún no existe)
//Route::get('/recharge', [SpotUsuarioController::class, 'showRechargeForm'])->name('pages.recharge');

// Manejar la búsqueda por ID de servicio
Route::post('/buscar-por-id', [SpotUsuarioController::class, 'searchById'])
    ->middleware('noCacheUsuarios') // Asegúrate de usar el alias correcto del middleware
    ->name('buscarPorId');
// Manejar la búsqueda por Nombre y Teléfono 
Route::post('/buscar-por-nombre-telefono', [BdInfoUsuariosController::class, 'buscarPorNombreYTelefono']);
// Ruta para procesar pagos con Openpay
Route::post('/create-charge', [PaymentController::class, 'createCharge'])->name('create.charge');
Route::post('/iniciar-pago', [PaymentController::class, 'iniciarPago'])->name('iniciarPago');
// Ruta para regresar de pagos con Openpay
Route::get('/payment/confirmation', [PaymentController::class, 'handlePaymentConfirmation'])->name('payment.confirmation');

/*
Route::get('/test-env', function () {
    dd(env('OPENPAY_ID'), env('OPENPAY_PUBLIC_API_KEY'), env('OPENPAY_SANDBOX_MODE'));
});*/



//Route::post('/recargas', 'RechargeController@recharge')->name('recharges');
//Route::get('/references', 'OpenPayController@references')->name('references');
//Route::post('/referencesOxxo', 'ConektaController@referencesOxxo')->name('referencesOxxo');
//Route::post('/paymentStripe','StripeController@paymentStripe')->name('paymentStripe');
