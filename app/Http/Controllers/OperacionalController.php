<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class OperacionalController extends Controller
{
    public function index(){
        return view('pages.op.stts-pedido');
    }

    public function resultlucbru(){
        return view('pages.op.res-lucbru');
    }

    public function resultquant(){
        return view('pages.op.res-quant');
    }

    public function resultlucliq(){
        return view('pages.op.res-lucliq');
    }

    public function getPedidoQtdeModalidade(Request $request){
        $token =  session('token');
        $headers = [ 'Authorization' => "Bearer $token" ];
        $datainicial = $request->input('datainicial');
        $datafinal =  $request->input('datafinal');
        $client = new Client(['base_url' =>  env('API_URL')]);
        $client->setDefaultOption('verify', base_path() . env('SSL'));
        $res = $client->get(
            '/getPedidoQtdeMod?datainicial='.$datainicial.'&datafinal='.$datafinal ,
            Array('headers' => $headers)
        );
        return response($res->getBody());
    }
    //

    public function getPedidoQtdeTFrete(Request $request){
        $token =  session('token');
        $headers = [ 'Authorization' => "Bearer $token" ];
        $datainicial = $request->input('datainicial');
        $datafinal =  $request->input('datafinal');
        $client = new Client(['base_url' =>  env('API_URL')]);
        $client->setDefaultOption('verify', base_path() . env('SSL'));
        $res = $client->get(
            '/getPedidoQtdeTFrete?datainicial='.$datainicial.'&datafinal='.$datafinal ,
            Array('headers' => $headers)
        );
        return response($res->getBody());
    }
    //

    public function getPedidoQtdeTCarga(Request $request){
        $token =  session('token');
        $headers = [ 'Authorization' => "Bearer $token" ];
        $datainicial = $request->input('datainicial');
        $datafinal =  $request->input('datafinal');
        $client = new Client(['base_url' =>  env('API_URL')]);
        $client->setDefaultOption('verify', base_path() . env('SSL'));
        $res = $client->get(
            '/getPedidoQtdeTCarga?datainicial='.$datainicial.'&datafinal='.$datafinal ,
            Array('headers' => $headers)
        );
        return response($res->getBody());
    }

    public function getPedidoLucroLiqTipoCarga(Request $request){
        $token =  session('token');
        $headers = [ 'Authorization' => "Bearer $token" ];
        $datainicial = $request->input('datainicial');
        $datafinal =  $request->input('datafinal');
        $client = new Client(['base_url' =>  env('API_URL')]);
        $client->setDefaultOption('verify', base_path() . env('SSL'));
        $res = $client->get(
            '/getPedidoLucroLiqTCarga?datainicial='.$datainicial.'&datafinal='.$datafinal ,
            Array('headers' => $headers)
        );
        return response($res->getBody());
    }


    public function getPedidoLucroBruTipoCarga(Request $request){
        $token =  session('token');
        $headers = [ 'Authorization' => "Bearer $token" ];
        $datainicial = $request->input('datainicial');
        $datafinal =  $request->input('datafinal');
        $client = new Client(['base_url' =>  env('API_URL')]);
        $client->setDefaultOption('verify', base_path() .  env('SSL'));
        $res = $client->get(
            '/getPedidoLucroBruTCarga?datainicial='.$datainicial.'&datafinal='.$datafinal ,
            Array('headers' => $headers)
        );
        return response($res->getBody());
    }

}
