<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable=["nombre","descripcion","precio","estado","empresa_id","empleado_id"];

    public function empresas()
    {
        return $this->belongsToMany(Empresa::class)->withPivot('nombre');  
    }

    public function empleados()
    {
        return $this->hasMany(Empleado::class);  
    }
}
