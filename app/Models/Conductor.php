<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre','dni',];

    protected $table = 'conductor';

    

    public function automotores()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
