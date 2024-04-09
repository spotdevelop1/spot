<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Request;


class RechargeController extends Controller
{

    public function recharge(Request $request){

        $numeroTelefono = $request->post('numeroTelefono');
        $numeroTelefono = preg_replace( '/\((\w+)\)/i', "$1", $numeroTelefono);
        $numeroTelefono = str_replace( '-', ' ', $numeroTelefono);
        $numeroTelefono = preg_replace( '/\s+/i', '', $numeroTelefono);


        $data['numeroTelefono'] = $numeroTelefono;
        $data['tipoServicio'] = $request->post('tipoServicioInput');
        $data['montoRecarga'] = $request->post('montoRecargaInput');


        // $data = [
        //     'numeroSinEspacio' => $numeroSinEspacio,
        //     'tipoServicio' => $tipoServicio,
        //     'montoRecarga' => $montoRecarga
        // ];

        // return $data;
        return view('pages.commerce', $data);
    }

   
}
