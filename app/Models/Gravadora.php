<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gravadora extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'codigo_grava';
}
