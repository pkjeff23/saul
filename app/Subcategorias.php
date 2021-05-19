<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategorias extends Model
{
    protected $table = 'subcategory';
    protected $fillable = [
        'state', 'title'
    ];
}
