<?php

namespace App\Models;

use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre','dni',];

    protected $table = 'conductor';

    

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
