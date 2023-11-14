<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conductor;
use App\Models\Vehiculo;

class ConductorController extends Controller
{
    public function index()
    {
        $conductores = Conductor::all();
        return view("conductores.index", compact("conductores"));
    }

    public function store(Request $request)
    {

        // Valida los datos del formulario.
        //$request->validate([
        //   'nombre' => 'required|string|max:255',
        //   'dni' => 'required|numeric|max:15',
        //]);

        // Crea un nuevo objeto Conductor 
        $conductor = new Conductor([
            'nombre' => $request->input('nombre'),
            'dni' => $request->input('dni'),
        ]);

        // Guarda el nuevo conductor en la base de datos
        $conductor->save();

        // Crea un nuevo objeto Vehiculo
        $vehiculo = new Vehiculo([
            'marca' => $request->input('marca_vehiculo'),
            'modelo' => $request->input('modelo_vehiculo'),
            'patente' => $request->input('patente_vehiculo'),
            'tipo' => $request->input('tipo_vehiculo'),
        ]);

        // Asocia el vehículo al conductor y guarda en la base de datos
        $conductor->vehiculos()->save($vehiculo);

        // Redirecciona después de almacenar
        return redirect()->route('conductor.index')->with('success', 'Conductor registrado exitosamente');
    }

    public function show($id){
        $conductor = Conductor::find($id);
    }


    public function destroy($conductor_id)
    {
        $conductor = Conductor::find($conductor_id);
        $conductor->delete();
        return redirect()->route("conductor.index");
    }
}
