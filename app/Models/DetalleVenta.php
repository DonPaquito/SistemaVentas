<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;
    public function venta() {
        return $this->belongsTo(Venta::class);
    }
    public function producto()
    {
        return $this->belongsTo(Componente::class, 'id_producto');
    }
    protected $fillable = ['nombre', 'id_venta', 'id_producto', 'cantidad'];
}
