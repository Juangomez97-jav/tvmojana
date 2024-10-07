<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    use HasFactory;
    protected $fillable=["nombre_requerimiento","estado","emleado_id","cliente_id","estado_id"];

    public function empleados()
    {
        return $this->belongsToMany(Empleado::class);  
    }

    public function clientes()
    {
        return $this->hasMany(Cliente::class);  
    }

    public function estados()
    {
        return $this->hasMany(Estado::class);  
    }
}
