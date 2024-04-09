<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use MongoDB\BSON\Regex; // Asegúrate de importar la clase Regex correctamente.

class BdInfoUsuariosController extends Controller
{
    public function buscarPorNombreYTelefono(Request $request)
    {
        // Validar los campos de entrada con mensajes personalizados
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'telefono' => 'required|string',
        ], [
            'nombre.required' => 'Coloque su nombre completo.', // Mensaje personalizado para el campo nombre
            'telefono.required' => 'Debe colocar su número de celular.', // Mensaje personalizado para el campo teléfono
        ]);

        // Crear una expresión regular insensible a mayúsculas/minúsculas para el nombre
        $nombreRegex = new Regex('^' . preg_quote($validatedData['nombre'], '/') . '$', 'i');

        // Buscar en la colección 'clientes' por nombre (usando regex) y teléfono (comparación directa)
        $usuario = Servicio::where('nombre', 'regex', $nombreRegex)
                           ->where('telefono', $validatedData['telefono'])
                           ->first();

        if ($usuario) {
            // Si se encuentra un usuario, redirigir a la misma página con un mensaje de éxito y el id_servicio
            return back()->with('success', "ID de Servicio encontrado: {$usuario->id_servicio}");
        } else {
            // Si no se encuentra el usuario, redirigir a la misma página con un mensaje de error específico
            return back()->with('errorNombreTelefono', 'No se encontró el usuario con los datos ingresados.');
        }
    }
}
