<?php

namespace App\Http\Controllers;

use App\Models\GeneroMusical;
use Illuminate\Http\Request;
use DB;
use SimpleXMLElement;

class GeneroMusicalController extends Controller
{
    public function index_json()
    {
        $genero_musicals = GeneroMusical::all();
        $json = json_encode($genero_musicals);

       
    
        dd ($json);
    }
    public function index_xml()
    {
        $genero_musicals = GeneroMusical::all();
    }
    
    public function store_json(Request $request)
    {
        
        $request = $request->json()->all();
        $genero_musical = new GeneroMusical();
        $genero_musical->codigo_gene = $request['codigo_gene'];
        $genero_musical->descricao_genero = $request['descricao_genero'];

        DB::transaction(function() use ($genero_musical) {

            $genero_musical->save();

        });
    }
    public function store_xml(Request $request)
    {
        $xml = simplexml_load_string($request->getContent());
        
        $genero_musical = new GeneroMusical();
        $genero_musical->codigo_gene = $xml->codigo_gene;
        $genero_musical->descricao_genero = $xml->descricao_genero;

        DB::transaction(function() use ($genero_musical) {

            $genero_musical->save();

        });
    }

    public function update_json(Request $request, GeneroMusical $genero_musical)
    {
        $request = $request->json()->all();
        $genero_musical = GeneroMusical::find($request['codigo_gene']);
        $genero_musical->codigo_gene = $request['codigo_gene'];
        $genero_musical->descricao_genero = $request['descricao_genero'];

        DB::transaction(function() use ($genero_musical) {

            $genero_musical->save();

        });
    }
    public function update_xml(Request $request, GeneroMusical $genero_musical)
    {
        $xml = simplexml_load_string($request->getContent());
        $genero_musical = GeneroMusical::find($xml->codigo_gene);
        $genero_musical->codigo_gene = $xml->codigo_gene;
        $genero_musical->descricao_genero = $xml->descricao_genero;

        DB::transaction(function() use ($genero_musical) {

            $genero_musical->save();

        });
    }

    public function destroy_json(Request $request)
    {
        $request = $request->json()->all();
        try {
            $excluir =  GeneroMusical::destroy($request['codigo_gene']);
        } catch (\Exception  $erro) {
        }
    }
    public function destroy_xml(Request $request)
    {
        $xml = simplexml_load_string($request->getContent());
        try {
            $excluir =  GeneroMusical::destroy($xml->codigo_gene);
        } catch (\Exception  $erro) {
        }
    }
}
