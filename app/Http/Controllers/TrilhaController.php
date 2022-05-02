<?php

namespace App\Http\Controllers;

use App\Models\Trilha;
use Illuminate\Http\Request;
use DB;
use SimpleXMLElement;

class TrilhaController extends Controller
{
    public function index_json()
    {
        $trilhas = Trilha::all();
        $json = json_encode($trilhas);

       
    
        dd ($json);
    }
    public function index_xml()
    {
        $trilhas = Trilha::all();
    }
    
    public function store_json(Request $request)
    {
        $request = $request->json()->all();
        
        $trilha = new Trilha();
        $trilha->id = $request['id'];
        $trilha->id_cd = $request['id_cd'];
        $trilha->duracao = $request['duracao'];
        $trilha->titulo_trilha = $request['titulo_trilha'];
        $trilha->comentario = $request['comentario'];

        DB::transaction(function() use ($trilha) {

            $trilha->save();

        });
        //deve retornar alguma informação?
    }
    public function store_xml(Request $request)
    {
        $xml = simplexml_load_string($request->getContent());
        $trilha = new Trilha();
        $trilha->id = $xml->id;
        $trilha->id_cd = $xml->id_cd;
        $trilha->duracao = $xml->duracao;
        $trilha->titulo_trilha = $xml->titulo_trilha;
        $trilha->comentario = $xml->comentario;

        DB::transaction(function() use ($trilha) {

            $trilha->save();

        });
    }

    public function update_json(Request $request, Trilha $trilha)
    {
        $request = $request->json()->all();
        $trilha = Trilha::find($request['id']);
        $trilha->id = $request['id'];
        $trilha->id_cd = $request['id_cd'];
        $trilha->duracao = $request['duracao'];
        $trilha->titulo_trilha = $request['titulo_trilha'];
        $trilha->comentario = $request['comentario'];

        DB::transaction(function() use ($trilha) {

            $trilha->save();

        });
    }
    public function update_xml(Request $request, Trilha $trilha)
    {
        $xml = simplexml_load_string($request->getContent());
        $trilha = Trilha::find($xml->id);
        $trilha->id = $xml->id;
        $trilha->id_cd = $xml->id_cd;
        $trilha->duracao = $xml->duracao;
        $trilha->titulo_trilha = $xml->titulo_trilha;
        $trilha->comentario = $xml->comentario;

        DB::transaction(function() use ($trilha) {

            $trilha->save();

        });
    }

    public function destroy_json(Request $request)
    {
        $request = $request->json()->all();
        try {
            $excluir =  Trilha::destroy($request['id']);
        } catch (\Exception  $erro) {
        }
    }
    public function destroy_xml(Request $request)
    {
        $xml = simplexml_load_string($request->getContent());
        try {
            $excluir =  Trilha::destroy($xml->id);
        } catch (\Exception  $erro) {
        }
    }
}
