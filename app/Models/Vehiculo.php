<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = ['marca', 'modelo', 'patente', 'tipo', 'titular_id'];

    protected $table = 'autos';

    public function vehiculos()
    {
        return $this->belongsTo(Titular::class);
    }

    public function infracciones()
    {
        return $this->hasMany(Infraccion::class, 'vehiculo_id');
    }
}
