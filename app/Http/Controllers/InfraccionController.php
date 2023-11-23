<?php

namespace App\Http\Controllers;

use App\Models\Titular;
use App\Models\Vehiculo;
use App\Models\Infraccion;
use Illuminate\Http\Request;

class InfraccionController extends Controller
{
    public function show($idVehiculo)
    {
        $vehiculo = Vehiculo::find($idVehiculo);
        $titular = $vehiculo->titular;
        $infracciones = $vehiculo->infracciones;
        $idTitular = $titular->id;

        return view('titulares.infracciones', ['titular' => $titular, 'vehiculo' => $vehiculo, 'infracciones' => $infracciones,'idTitular'=> $idTitular]);
    }

    public function store(Request $request, $idVehiculo)
    {
        $vehiculo = Vehiculo::find($idVehiculo);


        $infraccion = new Infraccion([
            'fecha' => $request->input('fecha_infraccion'),
            'tipo' => $request->input('tipo_infraccion'),
            'descripcion' => $request->input('descripcion_infraccion'),
            
        ]);

        // Asociar la infracción al vehículo y guardar en la base de datos
        $vehiculo->infracciones()->save($infraccion);
        return redirect()->route('infracciones.show', ['idVehiculo' => $vehiculo->id])->with('success', 'Infracción registrada exitosamente');
    }
    public function edit($idInfraccion){
        $infraccion = Infraccion::find($idInfraccion);

        return view('edit.editInfracciones', compact('infraccion'));
    }

    public function update(Request $request, $idInfraccion){
        $infraccion = Infraccion::find($idInfraccion);

        // Actualiza los campos de la infraccion según los datos del formulario
        $infraccion->fecha = $request->input('fecha');
        $infraccion->tipo = $request->input('tipo');
        $infraccion->descripcion = $request->input('descripcion');
        $infraccion->save();

        // Obtén el id del vehiculo asociado a la infraccion
        $idVehiculo = Infraccion::find($infraccion->auto_id);

        return redirect()->route('infracciones.show', ['idVehiculo' => $infraccion->auto_id])->with('success', 'Infracción actualizada exitosamente');

    }
    
    
  
    
}
