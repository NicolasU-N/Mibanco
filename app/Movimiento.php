<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    public function credito(){

        return $this->belongsTo('App\Credito');
        
    }
}
