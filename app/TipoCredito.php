<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCredito extends Model
{
    public function creditos(){

        return $this->hasMany('App\Credito', 'tipocredito_id', 'id');
        
    }
}
