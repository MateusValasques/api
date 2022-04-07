<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoxCD extends Model
{
    
    use HasFactory;
    public $timestamps = false;
    public $table = "box_cds";
    protected $primaryKey = 'id_box';
}
