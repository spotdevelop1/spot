<?php

namespace App\Http\Controllers;
use DB;
use Http;
use Stripe\Stripe;
use App\GuzzleHttp;
use Illuminate\Http\Request;

class StripeController extends Controller
{
 
    public function paymentStripe(Request $request){    
        Stripe::setApiKey('sk_test_51LSOeLHo1IBUssic5KrB04Ctcopm1hMonpXVSSpA1nsra065fH7ESFzQIAyxGd15xUWmQQGo85RK9I8b2qCJhEdS00Yw3KRA31');        

        $amount = $request->amount;
        $offer_id = $request->offer_id;
        $offerAltan = $request->offerAltan;
        $rate_id = $request->rate_id;
        $referencestype = $request->referencestype;
        $number_id = $request->number_id;
        $client_id = $request->client_id;
        $pay_id = $request->pay_id;
        $exists = $request->exists;
        $pack_id = $request->pack_id;
        $rate_name = $request->rate_name;
        $number = $request->number;


        try {
            $charge = \Stripe\Charge::create([
                'amount' => $amount*100,
                'currency' => 'mxn',
                'description' => '$'.number_format($amount,2).' - '.$rate_name.' - '.$number,
                'source' => $request->stripeToken,
                'metadata' => [
                    'type' => 'SpotUno'
                ]
            ]);

            
            if($charge->status && $charge->paid == true){
                $receipt_url = $charge->receipt_url;
                return redirect($receipt_url);
            }
            else{
                return back()->with('error','El pago <strong>NO</strong> fue capturado, hubo un error durante la debitación del saldo en tu tarjeta, comunícate al 8002258235, 9613602339 o 9616177800 para darte solución, proporcionando tu número <strong>'.$number.'</strong>');
            }
            
        } catch (\Stripe\Error\CardException $e) {
            return "Hola";
            return $e->getMessage();
        } catch(Exception $e){
            return "Hola 2";
            return $e->getMessage();
        }
        
    }

    
}
