<?php

namespace App\Http\Controllers;
use App\Models\Vehiculo;
use App\Models\Titular;
use Illuminate\Http\Request;

class AutosController extends Controller
{
    public function store(Request $request,$titularId)
    {
      $titular = Titular::find($titularId);

        // Crea un nuevo objeto Vehiculo
       $vehiculo = new Vehiculo([
        'marca' => $request->input('marca_vehiculo'),
        'modelo' => $request->input('modelo_vehiculo'),
        'patente' => $request->input('patente_vehiculo'),
        'tipo' => $request->input('tipo_vehiculo'),
    ]);

    // Asocia el vehículo al conductor y guarda en la base de datos
    $titular->vehiculos()->save($vehiculo);

    return redirect()->route('titulares.show', ['id' => $titular->id])->with('success', 'Vehículo agregado exitosamente');
    }
}


