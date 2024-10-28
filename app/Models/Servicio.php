<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable=["nombre","descripcion","precio","estado","empresa_id","empleado_id"];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class); 
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);  
    }
}
