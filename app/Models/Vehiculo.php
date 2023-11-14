<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = ['marca', 'modelo', 'patente', 'tipo', 'conductor_id'];

    protected $table = 'registro_vehiculo';

    public function vehiculos()
    {
        return $this->belongsTo(Conductor::class);
    }

    public function infracciones()
    {
        return $this->hasMany(Infraccion::class, 'vehiculo_id');
    }
}
