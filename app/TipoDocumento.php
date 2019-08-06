<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    public function clientes(){

        return $this->hasMany('App\Cliente', 'tipodocumento_id', 'id');
        
    }
}
