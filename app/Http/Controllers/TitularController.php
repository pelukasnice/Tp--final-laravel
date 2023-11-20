<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Titular;
use App\Models\Vehiculo;

class TitularController extends Controller
{
    public function index()
    {
        $titulares = Titular::all();
        return view("titulares.index", compact("titulares"));
    }

    public function store(Request $request)
    {

        // Valida los datos del formulario.
        //$request->validate([
        //   'nombre' => 'required|string|max:255',
        //   'dni' => 'required|numeric|max:15',
        //]);

        // Crea un nuevo objeto Conductor 
        $titular = new Titular([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'dni' => $request->input('dni'),
            'domicilio'=> $request->input('domicilio'),
        ]);

        // Guarda el nuevo conductor en la base de datos
        $titular->save();

        // Crea un nuevo objeto Vehiculo
        $vehiculo = new Vehiculo([
            'marca' => $request->input('marca_vehiculo'),
            'modelo' => $request->input('modelo_vehiculo'),
            'patente' => $request->input('patente_vehiculo'),
            'tipo' => $request->input('tipo_vehiculo'),
        ]);

        // Asocia el vehículo al conductor y guarda en la base de datos
        $titular->vehiculos()->save($vehiculo);

        // Redirecciona después de almacenar
        return redirect()->route('titulares.index')->with('success', 'Conductor registrado exitosamente');
    }

    public function show($id){
        $conductor = Titular::find($id);
        $vehiculos = $conductor->vehiculos; // obtiene los vehiculos asociados al conductor
        return view('titulares.show', ['conductor' => $conductor,'vehiculos' => $vehiculos]);
    }

    public function destroy($conductor_id)
    {
        $conductor = Titular::find($conductor_id);
        $conductor->delete();
        return redirect()->route("titular.index");
    }
}
