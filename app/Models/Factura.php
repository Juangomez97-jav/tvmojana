<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $fillable=["nombre","descripcion","precio","cliente_id","estado_id","servicio_id"];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);  
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);  
    }

    public function pago()
    {
        return $this->belongsTo(Pago::class);  
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
