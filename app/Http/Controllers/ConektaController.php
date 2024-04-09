<?php

namespace App\Http\Controllers;
use App\Conekta\ConektaPayment;
use Illuminate\Http\Request;
use App\Stripe\StripePayment;

require_once '../vendor/autoload.php';

class ConektaController extends Controller
{
    protected $ConektaPayment;

    function __construct(){
        $this->ConektaPayment = new ConektaPayment();
    }

    public function referencesOxxo(Request $request){
        $payment = $this->ConektaPayment->createOrderConekta($request);
        // print_r($payment); exit;
        return $payment;
    }
}
