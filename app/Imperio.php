<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imperio extends Model
{
    protected $fillable = [
        'nome', 'sigla'
    ];
}
