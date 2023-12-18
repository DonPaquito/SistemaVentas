<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }
    public function proveedor() {
        return $this->belongsTo(Proveedor::class);
    }
    public function empleado() {
        return $this->belongsTo(Empleado::class);
    }
    protected $fillable = [
        'nombre',
        'descripcion',
        'codigo'
    ];
}
