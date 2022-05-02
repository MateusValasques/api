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
        $request = $request->json()->all();
        $gravadora = new Gravadora();
        $gravadora->codigo_grava = $request['codigo_grava'];
        $gravadora->nome_grava = $request['nome_grava'];
        $gravadora->detalhes_grava = $request['detalhes_grava'];

        DB::transaction(function() use ($gravadora) {

            $gravadora->save();

        });
    }
    public function store_xml(Request $request)
    {
        $xml = simplexml_load_string($request->getContent());
        
        $gravadora = new Gravadora();
        $gravadora->codigo_grava = (string)$xml->codigo_grava;
        $gravadora->nome_grava = (string)$xml->nome_grava;
        $gravadora->detalhes_grava = (string)$xml->detalhes_grava;

        DB::transaction(function() use ($gravadora) {

            $gravadora->save();

        });
    }

    public function update_json(Request $request, Gravadora $gravadora)
    {
        $request = $request->json()->all();
        $gravadora = Gravadora::find($request['codigo_grava']);
        $gravadora->codigo_grava = $request['codigo_grava'];
        $gravadora->nome_grava = $request['nome_grava'];
        $gravadora->detalhes_grava = $request['detalhes_grava'];

        DB::transaction(function() use ($gravadora) {

            $gravadora->save();

        });
    }
    public function update_xml(Request $request, Gravadora $gravadora)
    {
        $xml = simplexml_load_string($request->getContent());
        $gravadora = Gravadora::find((string)$xml->codigo_grava);
        $gravadora->codigo_grava = (string)$xml->codigo_grava;
        $gravadora->nome_grava = (string)$xml->nome_grava;
        $gravadora->detalhes_grava = (string)$xml->detalhes_grava;

        DB::transaction(function() use ($gravadora) {

            $gravadora->save();

        });
    }

    public function destroy_json(Request $request)
    {

        $request = $request->json()->all();
        try {
            $excluir =  Gravadora::destroy($request['codigo_grava']);
        } catch (\Exception  $erro) {
        }
    }
    public function destroy_xml(Request $request)
    {
        $xml = simplexml_load_string($request->getContent());
        try {
            $excluir =  Gravadora::destroy((string)$xml->codigo_grava);
        } catch (\Exception  $erro) {
        }
    }
}
