<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
'reprecentante','nombre','rfc','curp','domicilio','numexterior ','numinterior','colonia','cp'
,'localidad','municipio','estado','pais','telefono' ,'celular ','email','comentario','limitecredito'
,'diascredito'

];
    public function provedor()
    {
        return $this->hasOne('App\Proveedor');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }


}
