<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneroMusical extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = "genero_musical";
    protected $primaryKey = 'codigo_gene';
}
