<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Servicio extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'clientes'; // Asegúrate de que el nombre de la colección sea correcto

        // Especifica los campos en los que se puede asignar masivamente
        protected $fillable = ['nombre', 'telefono', 'id_servicio'];
}
