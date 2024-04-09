<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagen';

    // Función para obtener imágenes por id_usuario
    public static function obtenerPorUsuarioId($idUsuario) {
        return self::where('id_usuario', $idUsuario)->get(['img', 'img2']);
    }

    // Función para obtener imágenes por nombre original (opcional)
    public static function obtenerPorNombreOriginal($nombre1, $nombre2) {
        return self::where('nombre_original1', $nombre1)
                   ->orWhere('nombre_original2', $nombre2)
                   ->get(['img', 'img2']);
    }
}
