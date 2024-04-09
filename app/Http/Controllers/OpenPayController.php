<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Openpay\Data\OpenPay as OpenPay;
use Exception;
use OpenpayApiError;
use OpenpayApiAuthError;
use OpenpayApiRequestError;
use OpenpayApiConnectionError;
use OpenpayApiTransactionError;
use Illuminate\Http\JsonResponse;

require_once '../vendor/autoload.php';

class OpenPayController extends Controller
{
    public function references(Request $request){
        #Cambiar llaves#
       
        Openpay::setProductionMode(true);

        $amount = $request->get('amount');
        $description = $request->get('description');

        $customer = array(
            'name'=> 'banda',
            'lastname' => '',
            'phone_number' => '9613601404',
            'email' => 'c.banda07@hotmail.com'
        );
        $chargeData = array(
            'method' => 'store',
            'amount' => floatval($amount),
            'description' => $description,
            'customer' => $customer
        );


        try {
            $charge = $openpay->charges->create($chargeData);
            return response()->json([
                'order_id' => $charge->id,
                'payment_method' => $charge->payment_method,
                'status' => $charge->status,
                'customer' => $charge->customer
            ]);
            return $charge;
        } catch (OpenpayApiTransactionError $e) {
            return $e;
        }

        return $charge;
    }
}*/
