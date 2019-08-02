<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    public function clientes(){

        return $this->belongsTo('App\Cliente', 'tipodocumento_id', 'id');
        
    }
}
