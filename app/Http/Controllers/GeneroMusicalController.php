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
        
        $genero_musical = new GeneroMusical();
        $genero_musical->nome_genero_musical = $request->nome_genero_musical;
        $genero_musical->data_nasc = $request->data_nasc;
        $genero_musical->genero = $request->genero;
        $genero_musical->peso = $request->peso;
        $genero_musical->altura = $request->altura;
        $genero_musical->ulr_foto = $request->ulr_foto;
        $genero_musical->detalhes_genero_musical = $request->detalhes_genero_musical;

        DB::transaction(function() use ($genero_musical) {

            $genero_musical->save();

        });
    }
    public function store_xml(Request $request)
    {
        $request = simplexml_load_string($request->getBody());
        
        $genero_musical = new GeneroMusical();
        $genero_musical->nome_genero_musical = $request->nome_genero_musical;
        $genero_musical->data_nasc = $request->data_nasc;
        $genero_musical->genero = $request->genero;
        $genero_musical->peso = $request->peso;
        $genero_musical->altura = $request->altura;
        $genero_musical->ulr_foto = $request->ulr_foto;
        $genero_musical->detalhes_genero_musical = $request->detalhes_genero_musical;

        DB::transaction(function() use ($genero_musical) {

            $genero_musical->save();

        });
    }

    public function update_json(Request $request, GeneroMusical $genero_musical)
    {
        $genero_musical = GeneroMusical::find($request->nome_genero_musical);
        $genero_musical->nome_genero_musical = $request->nome_genero_musical;
        $genero_musical->data_nasc = $request->data_nasc;
        $genero_musical->genero = $request->genero;
        $genero_musical->peso = $request->peso;
        $genero_musical->altura = $request->altura;
        $genero_musical->ulr_foto = $request->ulr_foto;
        $genero_musical->detalhes_genero_musical = $request->detalhes_genero_musical;

        DB::transaction(function() use ($genero_musical) {

            $genero_musical->save();

        });
    }
    public function update_xml(Request $request, GeneroMusical $genero_musical)
    {
        $request = simplexml_load_string($request->getBody());
        $genero_musical = GeneroMusical::find($request->nome_genero_musical);
        $genero_musical->nome_genero_musical = $request->nome_genero_musical;
        $genero_musical->data_nasc = $request->data_nasc;
        $genero_musical->genero = $request->genero;
        $genero_musical->peso = $request->peso;
        $genero_musical->altura = $request->altura;
        $genero_musical->ulr_foto = $request->ulr_foto;
        $genero_musical->detalhes_genero_musical = $request->detalhes_genero_musical;

        DB::transaction(function() use ($genero_musical) {

            $genero_musical->save();

        });
    }

    public function destroy_json(GeneroMusical $genero_musical)
    {
        try {
            $excluir =  GeneroMusical::destroy($genero_musical->nome_genero_musical);
            return response()->json(array('status' => "OK"));
        } catch (\Exception  $erro) {
            return response()->json(array('erro' => "$erro"));
        }
    }
    public function destroy_xml(GeneroMusical $genero_musical)
    {
        $request = simplexml_load_string($request->getBody());
        try {
            $excluir =  GeneroMusical::destroy($genero_musical->nome_genero_musical);
            return response()->json(array('status' => "OK"));
        } catch (\Exception  $erro) {
            return response()->json(array('erro' => "$erro"));
        }
    }
}
