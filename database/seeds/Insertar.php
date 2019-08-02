<?php

use Illuminate\Database\Seeder;

class Insertar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $tipoDoc = array('CÉDULA DE CIUDADANÍA', 'PASAPORTE', 'CÉDULA DE EXTRANJERÍA' );
        foreach ($tipoDoc as $tipoDocs) {
            App\TipoDocumento::create([
                'nombre' => $tipoDocs
            ]);
            
        }
            
    }
}
