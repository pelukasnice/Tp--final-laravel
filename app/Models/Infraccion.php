<?php

namespace App\Models;
use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraccion extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'descripcion', 'auto_id', 'tipo'];
    protected $table = 'infracciones';

    public function automotor()
    {
        return $this->belongsTo(Vehiculo::class, 'auto_id');
    }
}
