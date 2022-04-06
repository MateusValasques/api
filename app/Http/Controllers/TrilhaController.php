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
        
        $trilha = new Trilha();
        $trilha->nome_trilha = $request->nome_trilha;
        $trilha->data_nasc = $request->data_nasc;
        $trilha->genero = $request->genero;
        $trilha->peso = $request->peso;
        $trilha->altura = $request->altura;
        $trilha->ulr_foto = $request->ulr_foto;
        $trilha->detalhes_trilha = $request->detalhes_trilha;

        DB::transaction(function() use ($trilha) {

            $trilha->save();

        });
        //deve retornar alguma informação?
    }
    public function store_xml(Request $request)
    {
        $request = simplexml_load_string($request->getBody());
        $trilha = new Trilha();
        $trilha->nome_trilha = $request->nome_trilha;
        $trilha->data_nasc = $request->data_nasc;
        $trilha->genero = $request->genero;
        $trilha->peso = $request->peso;
        $trilha->altura = $request->altura;
        $trilha->ulr_foto = $request->ulr_foto;
        $trilha->detalhes_trilha = $request->detalhes_trilha;

        DB::transaction(function() use ($trilha) {

            $trilha->save();

        });
        //deve retornar alguma informação?
    }

    public function update_json(Request $request, Trilha $trilha)
    {
        $trilha = Trilha::find($request->nome_trilha);
        $trilha->nome_trilha = $request->nome_trilha;
        $trilha->data_nasc = $request->data_nasc;
        $trilha->genero = $request->genero;
        $trilha->peso = $request->peso;
        $trilha->altura = $request->altura;
        $trilha->ulr_foto = $request->ulr_foto;
        $trilha->detalhes_trilha = $request->detalhes_trilha;

        DB::transaction(function() use ($trilha) {

            $trilha->save();

        });
        //deve retornar alguma informação?
    }
    public function update_xml(Request $request, Trilha $trilha)
    {
        $request = simplexml_load_string($request->getBody());
        $trilha = Trilha::find($request->nome_trilha);
        $trilha->nome_trilha = $request->nome_trilha;
        $trilha->data_nasc = $request->data_nasc;
        $trilha->genero = $request->genero;
        $trilha->peso = $request->peso;
        $trilha->altura = $request->altura;
        $trilha->ulr_foto = $request->ulr_foto;
        $trilha->detalhes_trilha = $request->detalhes_trilha;

        DB::transaction(function() use ($trilha) {

            $trilha->save();

        });
        //deve retornar alguma informação?
    }

    public function destroy_json(Trilha $trilha)
    {
        try {
            $excluir =  Trilha::destroy($trilha->nome_trilha);
            return response()->json(array('status' => "OK"));
        } catch (\Exception  $erro) {
            return response()->json(array('erro' => "$erro"));
        }
    }
    public function destroy_xml(Trilha $trilha)
    {
        $request = simplexml_load_string($request->getBody());
        try {
            $excluir =  Trilha::destroy($trilha->nome_trilha);
            return response()->json(array('status' => "OK"));
        } catch (\Exception  $erro) {
            return response()->json(array('erro' => "$erro"));
        }
    }
}
