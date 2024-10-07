<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable=["documento","nombres", "apellidos","cargo","direccion","telefono","user_id","empresa_id"];

    public function users()
    {
        return $this->belongsToMany(User::class);  
    }
}
