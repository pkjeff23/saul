<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceImg extends Model
{
    protected $table = 'servicesimg';
    protected $fillable = [
         'imagen'
    ];
}
