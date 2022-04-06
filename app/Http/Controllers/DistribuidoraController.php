<?php

namespace App\Http\Controllers;

use App\Models\Distribuidora;
use Illuminate\Http\Request;
use DB;
use SimpleXMLElement;

class DistribuidoraController extends Controller
{
    public function index_json()
    {
        $distribuidoras = Distribuidora::all();
        $json = json_encode($distribuidoras);

       
    
        dd ($json);
    }
    public function index_xml()
    {
        $distribuidoras = Distribuidora::all();
    }
    
    public function store_json(Request $request)
    {
        
        $distribuidora = new Distribuidora();
        $distribuidora->nome_distribuidora = $request->nome_distribuidora;
        $distribuidora->data_nasc = $request->data_nasc;
        $distribuidora->genero = $request->genero;
        $distribuidora->peso = $request->peso;
        $distribuidora->altura = $request->altura;
        $distribuidora->ulr_foto = $request->ulr_foto;
        $distribuidora->detalhes_distribuidora = $request->detalhes_distribuidora;

        DB::transaction(function() use ($distribuidora) {

            $distribuidora->save();

        });
    }
    public function store_xml(Request $request)
    {
        $request = simplexml_load_string($request->getBody());
        
        $distribuidora = new Distribuidora();
        $distribuidora->nome_distribuidora = $request->nome_distribuidora;
        $distribuidora->data_nasc = $request->data_nasc;
        $distribuidora->genero = $request->genero;
        $distribuidora->peso = $request->peso;
        $distribuidora->altura = $request->altura;
        $distribuidora->ulr_foto = $request->ulr_foto;
        $distribuidora->detalhes_distribuidora = $request->detalhes_distribuidora;

        DB::transaction(function() use ($distribuidora) {

            $distribuidora->save();

        });
    }

    public function update_json(Request $request, Distribuidora $distribuidora)
    {
        $distribuidora = Distribuidora::find($request->nome_distribuidora);
        $distribuidora->nome_distribuidora = $request->nome_distribuidora;
        $distribuidora->data_nasc = $request->data_nasc;
        $distribuidora->genero = $request->genero;
        $distribuidora->peso = $request->peso;
        $distribuidora->altura = $request->altura;
        $distribuidora->ulr_foto = $request->ulr_foto;
        $distribuidora->detalhes_distribuidora = $request->detalhes_distribuidora;

        DB::transaction(function() use ($distribuidora) {

            $distribuidora->save();

        });
    }
    public function update_xml(Request $request, Distribuidora $distribuidora)
    {
        $request = simplexml_load_string($request->getBody());
        $distribuidora = Distribuidora::find($request->nome_distribuidora);
        $distribuidora->nome_distribuidora = $request->nome_distribuidora;
        $distribuidora->data_nasc = $request->data_nasc;
        $distribuidora->genero = $request->genero;
        $distribuidora->peso = $request->peso;
        $distribuidora->altura = $request->altura;
        $distribuidora->ulr_foto = $request->ulr_foto;
        $distribuidora->detalhes_distribuidora = $request->detalhes_distribuidora;

        DB::transaction(function() use ($distribuidora) {

            $distribuidora->save();

        });
    }

    public function destroy_json(Distribuidora $distribuidora)
    {
        try {
            $excluir =  Distribuidora::destroy($distribuidora->nome_distribuidora);
            return response()->json(array('status' => "OK"));
        } catch (\Exception  $erro) {
            return response()->json(array('erro' => "$erro"));
        }
    }
    public function destroy_xml(Distribuidora $distribuidora)
    {
        $request = simplexml_load_string($request->getBody());
        try {
            $excluir =  Distribuidora::destroy($distribuidora->nome_distribuidora);
            return response()->json(array('status' => "OK"));
        } catch (\Exception  $erro) {
            return response()->json(array('erro' => "$erro"));
        }
    }
}
