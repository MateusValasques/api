<?php

namespace App\Http\Controllers;

use App\Models\CD;
use Illuminate\Http\Request;
use DB;
use SimpleXMLElement;

class CDController extends Controller
{
    public function index_json()
    {
        $cds = CD::all();
        $json = json_encode($cds);

        dd ($json);
    }
    public function index_xml()
    {
        $cds = CD::all();
    }
    
    public function store_json(Request $request)
    {
        
        $cd = new CD();
        $cd->id_cd = $request->id_cd;
        $cd->titulo_cd = $request->titulo_cd;
        $cd->valor = $request->valor;
        $cd->data_lanc = $request->data_lanc;
        $cd->data_aqui = $request->data_aqui;
        $cd->num_trilhas = $request->num_trilhas;
        $cd->tempo_total = $request->tempo_total;
        $cd->varios_artistas = $request->varios_artistas;
        $cd->num_seq_box = $request->num_seq_box;
        $cd->codigo_gene = $request->codigo_gene;
        $cd->codigo_dist = $request->codigo_dist;
        $cd->id_box = $request->id_box;
        $cd->codigo_grava = $request->codigo_grava;

        DB::transaction(function() use ($cd) {

            $cd->save();

        });
    }
    public function store_xml(Request $request)
    {
        $request = simplexml_load_string($request->getBody());
        
        $cd = new CD();
        $cd->id_cd = $request->id_cd;
        $cd->titulo_cd = $request->titulo_cd;
        $cd->valor = $request->valor;
        $cd->data_lanc = $request->data_lanc;
        $cd->data_aqui = $request->data_aqui;
        $cd->num_trilhas = $request->num_trilhas;
        $cd->tempo_total = $request->tempo_total;
        $cd->varios_artistas = $request->varios_artistas;
        $cd->num_seq_box = $request->num_seq_box;
        $cd->codigo_gene = $request->codigo_gene;
        $cd->codigo_dist = $request->codigo_dist;
        $cd->id_box = $request->id_box;
        $cd->codigo_grava = $request->codigo_grava;

        DB::transaction(function() use ($cd) {

            $cd->save();

        });
    }

    public function update_json(Request $request, CD $cd)
    {
        $cd = CD::find($request->nome_cd);
        $cd->id_cd = $request->id_cd;
        $cd->titulo_cd = $request->titulo_cd;
        $cd->valor = $request->valor;
        $cd->data_lanc = $request->data_lanc;
        $cd->data_aqui = $request->data_aqui;
        $cd->num_trilhas = $request->num_trilhas;
        $cd->tempo_total = $request->tempo_total;
        $cd->varios_artistas = $request->varios_artistas;
        $cd->num_seq_box = $request->num_seq_box;
        $cd->codigo_gene = $request->codigo_gene;
        $cd->codigo_dist = $request->codigo_dist;
        $cd->id_box = $request->id_box;
        $cd->codigo_grava = $request->codigo_grava;

        DB::transaction(function() use ($cd) {

            $cd->save();

        });
    }
    public function update_xml(Request $request, CD $cd)
    {
        $request = simplexml_load_string($request->getBody());
        $cd = CD::find($request->nome_cd);
        $cd->id_cd = $request->id_cd;
        $cd->titulo_cd = $request->titulo_cd;
        $cd->valor = $request->valor;
        $cd->data_lanc = $request->data_lanc;
        $cd->data_aqui = $request->data_aqui;
        $cd->num_trilhas = $request->num_trilhas;
        $cd->tempo_total = $request->tempo_total;
        $cd->varios_artistas = $request->varios_artistas;
        $cd->num_seq_box = $request->num_seq_box;
        $cd->codigo_gene = $request->codigo_gene;
        $cd->codigo_dist = $request->codigo_dist;
        $cd->id_box = $request->id_box;
        $cd->codigo_grava = $request->codigo_grava;

        DB::transaction(function() use ($cd) {

            $cd->save();

        });
    }

    public function destroy_json(CD $cd)
    {
        try {
            $excluir =  CD::destroy($cd->nome_cd);
            return response()->json(array('status' => "OK"));
        } catch (\Exception  $erro) {
            return response()->json(array('erro' => "$erro"));
        }
    }
    public function destroy_xml(CD $cd)
    {
        $request = simplexml_load_string($request->getBody());
        try {
            $excluir =  CD::destroy($cd->nome_cd);
            return response()->json(array('status' => "OK"));
        } catch (\Exception  $erro) {
            return response()->json(array('erro' => "$erro"));
        }
    }
}
