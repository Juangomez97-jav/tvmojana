<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $fillable=["nombre_estado"];

    public function facturas()
    {
        return $this->hasMany(Factura::class);  
    }

    public function requerimientos()
    {
        return $this->hasMany(Requerimiento::class);  
    }
}
