<?php

namespace App\Models;
use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titular extends Model
{
    use HasFactory;
    
    protected $fillable = ['apellido','nombre','dni','domicilio'];

    protected $table = 'titulares';

    

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
