<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Credito extends Model
{

    public function tipoCredito(){

        return $this->hasOne('App\TipoCredito', 'id', 'tipocredito_id');
        
    }

    public function usuario(){

        return $this->hasOne('App\User', 'user_id', 'user_id');
        
    }

    public function movimientos(){

        return $this->hasMany('App\Movimiento');
        
    }

  
}
