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
        
        $request = $request->json()->all();
        $cd = new CD();
        $cd->id_cd = $request['id_cd'];
        $cd->titulo_cd = $request['titulo_cd'];
        $cd->valor = $request['valor'];
        $cd->data_lanc = $request['data_lanc'];
        $cd->data_aqui = $request['data_aqui'];
        $cd->num_trilhas = $request['num_trilhas'];
        $cd->tempo_total = $request['tempo_total'];
        $cd->varios_artistas = $request['varios_artistas'];
        $cd->num_seq_box = $request['num_seq_box'];
        $cd->codigo_gene = $request['codigo_gene'];
        $cd->codigo_dist = $request['codigo_dist'];
        $cd->id_box = $request['id_box'];
        $cd->codigo_grava = $request['codigo_grava'];

        DB::transaction(function() use ($cd) {

            $cd->save();

        });
    }
    public function store_xml(Request $request)
    {
        $xml = simplexml_load_string($request->getContent());
        
        $cd = new CD();
        $cd->id_cd = $xml->id_cd;
        $cd->titulo_cd = $xml->titulo_cd;
        $cd->valor = $xml->valor;
        $cd->data_lanc = $xml->data_lanc;
        $cd->data_aqui = $xml->data_aqui;
        $cd->num_trilhas = $xml->num_trilhas;
        $cd->tempo_total = $xml->tempo_total;
        $cd->varios_artistas = $xml->varios_artistas;
        $cd->num_seq_box = $xml->num_seq_box;
        $cd->codigo_gene = $xml->codigo_gene;
        $cd->codigo_dist = $xml->codigo_dist;
        $cd->id_box = $xml->id_box;
        $cd->codigo_grava = $xml->codigo_grava;

        DB::transaction(function() use ($cd) {

            $cd->save();

        });
    }

    public function update_json(Request $request, CD $cd)
    {
        $request = $request->json()->all();
        $cd = CD::find($request['id_cd']);
        $cd->id_cd = $request['id_cd'];
        $cd->titulo_cd = $request['titulo_cd'];
        $cd->valor = $request['valor'];
        $cd->data_lanc = $request['data_lanc'];
        $cd->data_aqui = $request['data_aqui'];
        $cd->num_trilhas = $request['num_trilhas'];
        $cd->tempo_total = $request['tempo_total'];
        $cd->varios_artistas = $request['varios_artistas'];
        $cd->num_seq_box = $request['num_seq_box'];
        $cd->codigo_gene = $request['codigo_gene'];
        $cd->codigo_dist = $request['codigo_dist'];
        $cd->id_box = $request['id_box'];
        $cd->codigo_grava = $request['codigo_grava'];

        DB::transaction(function() use ($cd) {

            $cd->save();

        });
    }
    public function update_xml(Request $request, CD $cd)
    {
        $xml = simplexml_load_string($request->getContent());
        $cd = CD::find($xml->id_cd);
        $cd->id_cd = $xml->id_cd;
        $cd->titulo_cd = $xml->titulo_cd;
        $cd->valor = $xml->valor;
        $cd->data_lanc = $xml->data_lanc;
        $cd->data_aqui = $xml->data_aqui;
        $cd->num_trilhas = $xml->num_trilhas;
        $cd->tempo_total = $xml->tempo_total;
        $cd->varios_artistas = $xml->varios_artistas;
        $cd->num_seq_box = $xml->num_seq_box;
        $cd->codigo_gene = $xml->codigo_gene;
        $cd->codigo_dist = $xml->codigo_dist;
        $cd->id_box = $xml->id_box;
        $cd->codigo_grava = $xml->codigo_grava;

        DB::transaction(function() use ($cd) {

            $cd->save();

        });
    }

    public function destroy_json(Request $request)
    {
        try {
            $excluir =  CD::destroy($request['id_cd']);
        } catch (\Exception  $erro) {
        }
    }
    public function destroy_xml(CD $cd)
    {
        $xml = simplexml_load_string($request->getContent());
        try {
            $excluir =  CD::destroy($xml->nome_cd);
        } catch (\Exception  $erro) {
        }
    }
}
