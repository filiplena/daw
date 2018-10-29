<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
   protected $fillable = [
        'nome', 'nuit', 'tipo_cliente','tipo_documento','nr_documento','provincia_id','endereco','email','contacto',
    ];
}
