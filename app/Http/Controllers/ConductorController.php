<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conductor;

class ConductorController extends Controller
{
    public function index()
    {
        $conductor = Conductor::all();
        return view("conductores.index", compact("conductor"));
    }

    public function store(Request $request)
    {

        // Valida los datos del formulario.
        $request->validate([
            'nombre' => 'required|string|max:255',
            'dni' => 'required|numeric|max:15',
        ]);

        // Crea un nuevo objeto Conductor 
        $conductor = new Conductor([
            'nombre' => $request->input('nombre'),
            'dni' => $request->input('dni'),
        ]);

        // Guarda el nuevo conductor en la base de datos
        $conductor->save();

        // Redirecciona después de almacenar
        return redirect()->route('nombre_de_tu_ruta')->with('success', 'Conductor registrado exitosamente');
    }



    public function destroy($conductor_id)
    {
        $conductor = Conductor::find($conductor_id);
        $conductor->delete();
        return redirect()->route("conductor.index");
    }
}
