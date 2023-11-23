<?php
use App\Http\Controllers\InfraccionController;
use App\Http\Controllers\AutosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitularController;
use App\Models\Infraccion;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/titular',[TitularController::class,'index'])->name('titulares.index');
Route::post('/titular',[TitularController::class,'store'])->name('titulares.store');
Route::get('/titular/{id}/editar', [TitularController::class, 'edit'])->name('titulares.edit');
Route::put('/titular/{id}', [TitularController::class, 'update'])->name('titulares.update');
Route::get('/titular/delete{id}',[TitularController::class,'destroy'])->name('titulares.delete');
Route::get('/titular/{id}', [TitularController::class, 'show'])->name('titulares.show');

//Route::get('/vehiculos/{id}/', [AutosController::class, 'show'])->name('vehiculos.show');
Route::post('/titular/{id}/vehiculos', [AutosController::class, 'store'])->name('titulares.vehiculos.store');
Route::get('/vehiculos/{idVehiculo}/editar', [AutosController::class, 'edit'])->name('vehiculos.edit');
Route::put('/vehiculos/{idVehiculo}', [AutosController::class, 'update'])->name('vehiculos.update');
Route::delete('/vehiculos/{idVehiculo}', [AutosController::class,'destroy'])->name('vehiculos.delete');


Route::get('/infracciones/{idVehiculo}', [InfraccionController::class, 'show'])->name('infracciones.show');
Route::post('/infracciones/{idVehiculo}', [InfraccionController::class, 'store'])->name('infracciones.store');
Route::get('/infracciones/{idInfraccion}/editar', [InfraccionController::class, 'edit'])->name('infracciones.edit');
Route::put('/infracciones/{idInfraccion}', [InfraccionController::class, 'update'])->name('infraccion.update');
Route::delete('/infracciones/{idInfraccion}', [AutosController::class,'destroy'])->name('infracciones.delete');

require __DIR__.'/auth.php';
