<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable=["nombre","descripcion","precio","stock"];

    public function cliente()
    {
        return $this->hasMany(Cliente::class);  // Un servicio lo tienen muchos clientes
    }
}
