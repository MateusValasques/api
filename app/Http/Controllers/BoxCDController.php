<?php

namespace App\Http\Controllers;

use App\Models\BoxCD;
use Illuminate\Http\Request;
use DB;
use SimpleXMLElement;

class BoxCDController extends Controller
{
    public function index_json()
    {
        $box_cds = BoxCD::all();
        $json = json_encode($box_cds);

       
        dd ($json);
    }
    public function index_xml()
    {
        $box_cds = BoxCD::all();
    }
    
    public function store_json(Request $request)
    {

        $request = $request->json()->all();
        $box_cd = new BoxCD();
        $box_cd->id_box = $request["id_box"];
        $box_cd->nome_box = $request["nome_box"];
        $box_cd->total_no_box = $request["total_no_box"];
        $box_cd->codigo_grava = $request["codigo_grava"];

        DB::transaction(function() use ($box_cd) {

            $box_cd->save();

        });
    }
    public function store_xml(Request $request)
    {
        $xml = simplexml_load_string($request->getContent());
        
        $box_cd = new BoxCD();
        $box_cd->id_box = (string)$xml->id_box;
        $box_cd->nome_box = (string)$xml->nome_box;
        $box_cd->total_no_box = (int)$xml->total_no_box;
        $box_cd->codigo_grava = (string)$xml->codigo_grava;

        DB::transaction(function() use ($box_cd) {

            $box_cd->save();

        });
    }

    public function update_json(Request $request, BoxCD $box_cd)
    {
        $request = $request->json()->all();
        $box_cd = BoxCD::find($request["id_box"]);
        $box_cd->id_box = $request["id_box"];
        $box_cd->nome_box = $request["nome_box"];
        $box_cd->total_no_box = $request["total_no_box"];
        $box_cd->codigo_grava = $request["codigo_grava"];

        DB::transaction(function() use ($box_cd) {

            $box_cd->save();

        });
    }
    public function update_xml(Request $request, BoxCD $box_cd)
    {
        $xml = simplexml_load_string($request->getContent());
        $box_cd = BoxCD::find((string)$xml->id_box);
        $box_cd->id_box = (string)$xml->id_box;
        $box_cd->nome_box = (string)$xml->nome_box;
        $box_cd->total_no_box = (int)$xml->total_no_box;
        $box_cd->codigo_grava = (string)$xml->codigo_grava;

        DB::transaction(function() use ($box_cd) {

            $box_cd->save();

        });
    }

    public function destroy_json(Request $request)
    {
        $request = $request->json()->all();
        try {
            $excluir =  BoxCD::destroy($request["id_box"]);
        } catch (\Exception  $erro) {
        }
    }
    public function destroy_xml(Request $request)
    {
        $xml = simplexml_load_string($request->getContent());
        try {
            $excluir =  BoxCD::destroy((string)$xml->id_box);
        } catch (\Exception  $erro) {
        }
    }
}
