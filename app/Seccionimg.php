<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccionimg extends Model
{
    public $table = "seccionsimgs";

    protected $fillable = [
        'title','imagen','seccion_id'
    ];
}
