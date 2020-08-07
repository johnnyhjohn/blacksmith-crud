<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reino extends Model
{
    public function imperio(){

        return $this->belongsTo('App\Imperio');
    }

    //
}
