<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    protected $fillable=["valor_pagar","factura_id"];

    public function facturas()
    {
        return $this->belongsToMany(Factura::class);  
    }
}
