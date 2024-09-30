<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    
    protected $fillable=["nombres","apellidos","documento","telefono","barrio","calle","poste","sucursal", "estado","servicio_id"];

    public function servicio()
    {
        return $this->hasMany(Servicio::class);  // Un puede tener muchos servicios
    }
}
