<?php

namespace App\Helpers;

class CensorHelper {

    //Censura Nombre
    public static function censurarNombre($nombre) {
        $palabras = explode(' ', $nombre);
        $nombreCensurado = array_map(function($palabra) {
            if (strlen($palabra) > 2) {
                return substr($palabra, 0, 2) . 'xxx';
            }
            return $palabra;
        }, $palabras);

        return implode(' ', $nombreCensurado);
    }

    //Censura Telefono

    public static function censurarTelefono($telefonos) {
        $telefonosCensurados = array_map(function($telefono) {
            if (strlen($telefono) > 4) {
                // Censura todo excepto los primeros 3 y los últimos 2 caracteres
                return substr($telefono, 0, 3) . str_repeat('x', strlen($telefono) - 5) . substr($telefono, -2);
            }
            // Si el teléfono es demasiado corto, no censurar
            return $telefono;
        }, explode(',', $telefonos)); // Divide los teléfonos si hay más de uno

        return implode(', ', $telefonosCensurados); // Une los teléfonos censurados con comas
    }
}
