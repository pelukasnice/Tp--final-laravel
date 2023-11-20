<?php

use App\Http\Controllers\AutosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitularController;

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
Route::get('/titular/delete{id}',[TitularController::class,'destroy'])->name('titulares.delete');

Route::get('/titular/{id}', [TitularController::class, 'show'])->name('titulares.show');

Route::post('/titular/{id}/vehiculos', [AutosController::class, 'store'])->name('titulares.vehiculos.store');

require __DIR__.'/auth.php';
