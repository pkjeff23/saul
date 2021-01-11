<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'category';
    protected $fillable = [
        'state', 'imagen'
    ];
}
