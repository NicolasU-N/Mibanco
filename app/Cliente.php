<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function creditos(){

        return $this->hasMany('App\Credito', 'user_id', 'user_id');
        
    }

    public function tipoDocumento(){

        return $this->hasOne('App\TipoDocumento', 'id', 'tipodocumento_id');
        
    }
}
