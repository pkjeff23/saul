<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Products extends Model
{
    use Searchable;
    protected $fillable = [
        'state', 'imagen'
    ];
}
