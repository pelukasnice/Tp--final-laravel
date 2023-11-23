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

    public function edit($idVehiculo){
      $vehiculo = Vehiculo::find($idVehiculo);

      return view('edit.editVehiculos', compact('vehiculo'));
    }

    public function update(Request $request, $idVehiculo)
    {
        $vehiculo = Vehiculo::find($idVehiculo);        
        // Actualiza los campos del vehículo según los datos del formulario
        $vehiculo->tipo = $request->input('tipo');
        $vehiculo->marca = $request->input('marca');
        $vehiculo->modelo = $request->input('modelo');
        $vehiculo->patente = $request->input('patente');
        $vehiculo->save();

        // Obtén al titular asociado al vehículo
        $titular = Titular::find($vehiculo->titular_id);

        return redirect()->route('titulares.show', ['id' => $titular->id])->with('success', 'Vehículo actualizado exitosamente');
    }

    //public function show($id){
      //$titular = Titular::find($id);
      //$vehiculos = $titular->vehiculos;// obtiene los vehiculos asociados al conductor
      
       
      //eturn view('titulares.show', ['conductor' => $titular,'vehiculos' => $vehiculos]);
  //}
  public function destroy($idVehiculo) {
      $vehiculo = Vehiculo::find($idVehiculo);
      $vehiculo->delete();
      $titular = Titular::find($vehiculo->titular_id);

      return redirect()->route('titulares.show', ['id' => $titular->id])->with('success', 'Vehículo eliminado exitosamente');
     
  }

} 


