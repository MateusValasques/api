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
        
        $box_cd = new BoxCD();
        $box_cd->id_box = $request->id_box;
        $box_cd->nome_box = $request->nome_box;
        $box_cd->total_no_box = $request->total_no_box;
        $box_cd->codigo_grava = $request->codigo_grava;

        DB::transaction(function() use ($box_cd) {

            $box_cd->save();

        });
    }
    public function store_xml(Request $request)
    {
        $request = simplexml_load_string($request->getBody());
        
        $box_cd = new BoxCD();
        $box_cd->id_box = $request->id_box;
        $box_cd->nome_box = $request->nome_box;
        $box_cd->total_no_box = $request->total_no_box;
        $box_cd->codigo_grava = $request->codigo_grava;

        DB::transaction(function() use ($box_cd) {

            $box_cd->save();

        });
    }

    public function update_json(Request $request, BoxCD $box_cd)
    {
        $box_cd = BoxCD::find($request->nome_box_cd);
        $box_cd->id_box = $request->id_box;
        $box_cd->nome_box = $request->nome_box;
        $box_cd->total_no_box = $request->total_no_box;
        $box_cd->codigo_grava = $request->codigo_grava;

        DB::transaction(function() use ($box_cd) {

            $box_cd->save();

        });
    }
    public function update_xml(Request $request, BoxCD $box_cd)
    {
        $request = simplexml_load_string($request->getBody());
        $box_cd = BoxCD::find($request->nome_box_cd);
        $box_cd->id_box = $request->id_box;
        $box_cd->nome_box = $request->nome_box;
        $box_cd->total_no_box = $request->total_no_box;
        $box_cd->codigo_grava = $request->codigo_grava;

        DB::transaction(function() use ($box_cd) {

            $box_cd->save();

        });
    }

    public function destroy_json(BoxCD $box_cd)
    {
        try {
            $excluir =  BoxCD::destroy($box_cd->nome_box_cd);
            return response()->json(array('status' => "OK"));
        } catch (\Exception  $erro) {
            return response()->json(array('erro' => "$erro"));
        }
    }
    public function destroy_xml(BoxCD $box_cd)
    {
        $request = simplexml_load_string($request->getBody());
        try {
            $excluir =  BoxCD::destroy($box_cd->nome_box_cd);
            return response()->json(array('status' => "OK"));
        } catch (\Exception  $erro) {
            return response()->json(array('erro' => "$erro"));
        }
    }
}
