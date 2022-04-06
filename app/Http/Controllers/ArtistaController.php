<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\Request;
use DB;
use SimpleXMLElement;
use Carbon\Carbon;

class ArtistaController extends Controller
{
    public function index_json()
    {
        $artistas = Artista::all();
        $json = json_encode($artistas);

        dd ($json);
    }
    public function index_xml()
    {
        $artistas = Artista::all();
    }
    
    public function store_json(Request $request)
    { 
        $request = $request->json()->all();
        
        $artista = new Artista();
        $artista->id = $request["id"];
        $artista->nome_artista = $request["nome_artista"];
        $artista->data_nasc = Carbon::today();
        $artista->genero = $request["genero"];
        $artista->peso = $request["peso"];
        $artista->altura = $request["altura"];
        $artista->ulr_foto = $request["ulr_foto"];
        $artista->detalhes_artista = $request["detalhes_artista"];

        DB::transaction(function() use ($artista) {

            $artista->save();

        });
    }
    public function store_xml(Request $request)
    {
        $request = simplexml_load_string($request->getBody());
        
        $artista = new Artista();
        $artista->nome_artista = $request->nome_artista;
        $artista->data_nasc = $request->data_nasc;
        $artista->genero = $request->genero;
        $artista->peso = $request->peso;
        $artista->altura = $request->altura;
        $artista->ulr_foto = $request->ulr_foto;
        $artista->detalhes_artista = $request->detalhes_artista;

        DB::transaction(function() use ($artista) {

            $artista->save();

        });
    }

    public function update_json(Request $request, Artista $artista)
    {
        $request = $request->json()->all();
        $artista = Artista::find($request["id"]);
        $artista->id = $request["id"];
        $artista->nome_artista = $request["nome_artista"];
        $artista->data_nasc = Carbon::today();
        $artista->genero = $request["genero"];
        $artista->peso = $request["peso"];
        $artista->altura = $request["altura"];
        $artista->ulr_foto = $request["ulr_foto"];
        $artista->detalhes_artista = $request["detalhes_artista"];

        DB::transaction(function() use ($artista) {

            $artista->save();

        });
    }
    public function update_xml(Request $request, Artista $artista)
    {
        $request = simplexml_load_string($request->getBody());
        $artista = Artista::find($request->nome_artista);
        $artista->nome_artista = $request->nome_artista;
        $artista->data_nasc = $request->data_nasc;
        $artista->genero = $request->genero;
        $artista->peso = $request->peso;
        $artista->altura = $request->altura;
        $artista->ulr_foto = $request->ulr_foto;
        $artista->detalhes_artista = $request->detalhes_artista;

        DB::transaction(function() use ($artista) {

            $artista->save();

        });
    }
    public function destroy_json(Request $request)
    {
        $request = $request->json()->all();
        try {
            $excluir =  Artista::destroy($request["id"]);
            return response()->json(array('status' => "OK"));
        } catch (\Exception  $erro) {
            return response()->json(array('erro' => "$erro"));
        }
    }
    public function destroy_xml(Artista $artista)
    {
        $request = simplexml_load_string($request->getBody());
        try {
            $excluir =  Artista::destroy($artista->nome_artista);
            return response()->json(array('status' => "OK"));
        } catch (\Exception  $erro) {
            return response()->json(array('erro' => "$erro"));
        }
    }
}
