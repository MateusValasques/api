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
        $request = $request->json()->all();
        
        $distribuidora = new Distribuidora();
        $distribuidora->codigo_dist = $request['codigo_dist'];
        $distribuidora->descricao_dist = $request['descricao_dist'];

        DB::transaction(function() use ($distribuidora) {

            $distribuidora->save();

        });
    }
    public function store_xml(Request $request)
    {
        $xml = simplexml_load_string($request->getContent());
        
        $distribuidora = new Distribuidora();
        $distribuidora->codigo_dist = (string)$xml->codigo_dist;
        $distribuidora->descricao_dist = (string)$xml->descricao_dist;

        DB::transaction(function() use ($distribuidora) {

            $distribuidora->save();

        });
    }

    public function update_json(Request $request, Distribuidora $distribuidora)
    {

        $request = $request->json()->all();
        
        $distribuidora = Distribuidora::find($request['codigo_dist']);
        $distribuidora->codigo_dist = $request['codigo_dist'];
        $distribuidora->descricao_dist = $request['descricao_dist'];

        DB::transaction(function() use ($distribuidora) {

            $distribuidora->save();

        });
    }
    public function update_xml(Request $request, Distribuidora $distribuidora)
    {
        $xml = simplexml_load_string($request->getContent());
        $distribuidora = Distribuidora::find($xml->codigo_dist);
        $distribuidora->codigo_dist = (string)$xml->codigo_dist;
        $distribuidora->descricao_dist = (string)$xml->descricao_dist;

        DB::transaction(function() use ($distribuidora) {

            $distribuidora->save();

        });
    }

    public function destroy_json(Request $request)
    {
        $request = $request->json()->all();
        try {
            $excluir =  Distribuidora::destroy($request['codigo_dist']);
        } catch (\Exception  $erro) {
        }
    }
    public function destroy_xml(Request $request)
    {
        $xml = simplexml_load_string($request->getContent());
        try {
            $excluir =  Distribuidora::destroy((string)$xml->codigo_dist);
        } catch (\Exception  $erro) {
        }
    }
}
