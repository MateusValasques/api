<?php

namespace App\Http\Controllers;

use App\Models\Coordenadas;
use Illuminate\Http\Request;
use DB;

class TesteMapsController extends Controller
{
    public function index()
    {
        $coordenadas = Coordenadas::first();
        return $coordenadas;
    }
}
