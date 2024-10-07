<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable=["nombre","precio", "descripcion","cantidad","servicio_id"];

    public function servicios()
    {
        return $this->hasMany(Servicio::class); 
    }
}
