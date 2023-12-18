<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad');
    }

    public function documento()
    {
        return $this->belongsTo(Documento::class, 'id_documento');
    }
    protected $fillable = [
        'nombre',
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'direccion',
        'sueldo',
        'id_documento',
        'id_ciudad',
    ];
}
