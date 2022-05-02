<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CD extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = "cds";
    protected $primaryKey = 'id_cd';
}
