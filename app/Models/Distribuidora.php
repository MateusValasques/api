<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribuidora extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $primaryKey = 'codigo_dist';
}
