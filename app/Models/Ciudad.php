<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    public static $rules = [
        'nombre' => 'required|unique:ciudads|min:3',
        // Otras reglas de validación...
    ];
    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }
    public function empleado() {
        return $this->belongsTo(Empleado::class);
    }
    public function proveedor() {
        return $this->belongsTo(Proveedor::class);
    }
    protected $fillable = [
        'nombre'
    ];
}
