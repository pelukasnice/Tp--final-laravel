<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraccion extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'descripcion', 'vehiculo_id', 'tipo'];

    public function automotor()
    {
        return $this->belongsTo(Automotor::class, 'vehiculo_id');
    }
}
