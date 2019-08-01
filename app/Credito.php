<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{

    public function tipoCredito(){

        return $this->hasOne('App/TipoCredito','tipo_credito','id');
        
    }

    public function cliente(){

        return $this->hasOne('App/Cliente', 'usuario_credito', 'documento');
        
    }

    public function movimientos(){

        return $this->hasMany('App/Movimiento', 'credito_id', 'id');
        
    }

  
}
