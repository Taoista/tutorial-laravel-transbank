<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Transbank\Webpay\WebpayPlus;
use Transbank\Webpay\WebpayPlus\Transaction;
use App\Models\Ventas;


class TransbankController extends Controller
{
    
    

    public function __contruct()
    {
        if(config('app.debug')){
            WebpayPlus::configureForTesting();
        }else{
            $cc = '';
            $api_key = '';
            WebpayPlus::configureForProduction($cc, $api_key);
        }
    }


    public function iniciar(Request $request)
    {
        $venta = new Ventas;
        $venta->session_id = 'soy-un-token';
        $venta->total = $request->total;
        $venta->save();
        return response()->json($this->start_web_pay($venta));
    }

    public function start_web_pay($venta)
    {
        $transaction = (new Transaction)->create(
            $venta->id,
            $venta->session_id,
            $venta->total,
            url('confirmar-pago')
        );

        // ? guardar token

        return $transaction->getUrl().'?token_ws='.$transaction->getToken();
    }


    public function confirmar_pago(Request $request)
    {
        $confirmacion = (new Transaction)->commit($request->get("token_ws"));

        if($confirmacion->responseCode == 0){
            // correcto
        }else{
            // error
        }

    }

}
