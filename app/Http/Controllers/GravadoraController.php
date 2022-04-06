<?php

namespace App\Http\Controllers;

use App\Models\Gravadora;
use Illuminate\Http\Request;
use DB;
use SimpleXMLElement;

class GravadoraController extends Controller
{
    public function index_json()
    {
        $gravadoras = Gravadora::all();
        $json = json_encode($gravadoras);

       
    
        dd ($json);
    }
    public function index_xml()
    {
        $gravadoras = Gravadora::all();
    }
    
    public function store_json(Request $request)
    {
        
        $gravadora = new Gravadora();
        $gravadora->nome_gravadora = $request->nome_gravadora;
        $gravadora->data_nasc = $request->data_nasc;
        $gravadora->genero = $request->genero;
        $gravadora->peso = $request->peso;
        $gravadora->altura = $request->altura;
        $gravadora->ulr_foto = $request->ulr_foto;
        $gravadora->detalhes_gravadora = $request->detalhes_gravadora;

        DB::transaction(function() use ($gravadora) {

            $gravadora->save();

        });
    }
    public function store_xml(Request $request)
    {
        $request = simplexml_load_string($request->getBody());
        
        $gravadora = new Gravadora();
        $gravadora->nome_gravadora = $request->nome_gravadora;
        $gravadora->data_nasc = $request->data_nasc;
        $gravadora->genero = $request->genero;
        $gravadora->peso = $request->peso;
        $gravadora->altura = $request->altura;
        $gravadora->ulr_foto = $request->ulr_foto;
        $gravadora->detalhes_gravadora = $request->detalhes_gravadora;

        DB::transaction(function() use ($gravadora) {

            $gravadora->save();

        });
    }

    public function update_json(Request $request, Gravadora $gravadora)
    {
        $gravadora = Gravadora::find($request->nome_gravadora);
        $gravadora->nome_gravadora = $request->nome_gravadora;
        $gravadora->data_nasc = $request->data_nasc;
        $gravadora->genero = $request->genero;
        $gravadora->peso = $request->peso;
        $gravadora->altura = $request->altura;
        $gravadora->ulr_foto = $request->ulr_foto;
        $gravadora->detalhes_gravadora = $request->detalhes_gravadora;

        DB::transaction(function() use ($gravadora) {

            $gravadora->save();

        });
    }
    public function update_xml(Request $request, Gravadora $gravadora)
    {
        $request = simplexml_load_string($request->getBody());
        $gravadora = Gravadora::find($request->nome_gravadora);
        $gravadora->nome_gravadora = $request->nome_gravadora;
        $gravadora->data_nasc = $request->data_nasc;
        $gravadora->genero = $request->genero;
        $gravadora->peso = $request->peso;
        $gravadora->altura = $request->altura;
        $gravadora->ulr_foto = $request->ulr_foto;
        $gravadora->detalhes_gravadora = $request->detalhes_gravadora;

        DB::transaction(function() use ($gravadora) {

            $gravadora->save();

        });
    }

    public function destroy_json(Gravadora $gravadora)
    {
        try {
            $excluir =  Gravadora::destroy($gravadora->nome_gravadora);
            return response()->json(array('status' => "OK"));
        } catch (\Exception  $erro) {
            return response()->json(array('erro' => "$erro"));
        }
    }
    public function destroy_xml(Gravadora $gravadora)
    {
        $request = simplexml_load_string($request->getBody());
        try {
            $excluir =  Gravadora::destroy($gravadora->nome_gravadora);
            return response()->json(array('status' => "OK"));
        } catch (\Exception  $erro) {
            return response()->json(array('erro' => "$erro"));
        }
    }
}
