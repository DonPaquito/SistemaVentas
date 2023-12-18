<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = ['numVenta', 'id_cliente', 'fecha'];


    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function detallesVenta()
    {
        return $this->hasMany(DetalleVenta::class, 'id_venta');
    }
}
