<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    
    protected $fillable=["documento","nombres","apellidos","telefono","barrio","calle","poste","correo","empresa_id","servicio_id"];

    public function estado()
    {
        return $this->belongsToMany(Estado::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function factura()
    {
        return $this->belongsTo(Factura::class);
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }
}
