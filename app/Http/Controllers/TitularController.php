<?php

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Models\Titular;
use App\Models\Vehiculo;

class TitularController extends Controller
{
    public function index()
    {
        $titulares = Titular::with('vehiculos.infracciones')->orderBy('apellido')->paginate(10);
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
        $vehiculos = $conductor->vehiculos;// obtiene los vehiculos asociados al conductor
        $infracciones =  new Collection(); // Crea una colección vacía para las infracciones

    foreach ($vehiculos as $vehiculo) {
        $infracciones = $infracciones->merge($vehiculo->infracciones);
    }
         
        return view('titulares.show', ['conductor' => $conductor,'vehiculos' => $vehiculos,'infracciones'=> $infracciones]);
    }

    public function destroy($id)
    {
        $conductor = Titular::find($id);
        $conductor->delete();
        return redirect()->route("titulares.index");
    }

    public function edit($id){
        $titular = Titular::find($id);
        return view('edit.editTitulares', compact('titular'));
    }

    public function update(Request $request, $id){
        $titular = Titular::find($id);

        $titular->nombre = $request->input('nombre');
        $titular->apellido = $request->input('apellido');
        $titular->domicilio = $request->input('domicilio');
        $titular->dni = $request->input('dni');

        $titular->save();

        return redirect()->route('titulares.index', ['id' => $titular->id])->with('success', 'Titular actualizado exitosamente');

    }
}
