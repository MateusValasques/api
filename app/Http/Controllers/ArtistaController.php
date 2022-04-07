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
        $xml = simplexml_load_string($request->getContent());
        
        $artista = new Artista();
        $artista->id = (int)$xml->id;
        $artista->nome_artista = (string)$xml->nome_artista;
        $artista->data_nasc = (string)$xml->data_nasc;
        $artista->genero = (string)$xml->genero;
        $artista->peso = (string)$xml->peso;
        $artista->altura = (string)$xml->altura;
        $artista->ulr_foto = (string)$xml->ulr_foto;
        $artista->detalhes_artista = (string)$xml->detalhes_artista;

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
        $xml = simplexml_load_string($request->getContent());
        $artista = Artista::find((int)$xml->id);
        $artista->id = (int)$xml->id;
        $artista->nome_artista = (string)$xml->nome_artista;
        $artista->data_nasc = (string)$xml->data_nasc;
        $artista->genero = (string)$xml->genero;
        $artista->peso = (string)$xml->peso;
        $artista->altura = (string)$xml->altura;
        $artista->ulr_foto = (string)$xml->ulr_foto;
        $artista->detalhes_artista = (string)$xml->detalhes_artista;

        DB::transaction(function() use ($artista) {

            $artista->save();

        });
    }
    public function destroy_json(Request $request)
    {
        $request = $request->json()->all();
        try {
            $excluir =  Artista::destroy($request["id"]);
        } catch (\Exception  $erro) {
        }
    }
    public function destroy_xml(Request $request)
    {
        $xml = simplexml_load_string($request->getContent());
        try {
            $excluir =  Artista::destroy((int)$xml->id);
        } catch (\Exception  $erro) {
        }
    }
}
