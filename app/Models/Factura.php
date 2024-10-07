<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $fillable=["nombre","descripcion","precio","cliente_id","estado_id","servicio_id"];

    public function clientes()
    {
        return $this->hasMany(Cliente::class);  
    }

    public function estados()
    {
        return $this->hasMany(Estado::class);
    }

    public function servicios()
    {
        return $this->hasMany(Servicio::class);  
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class);  
    }
}
