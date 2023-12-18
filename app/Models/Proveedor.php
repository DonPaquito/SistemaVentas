<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'nombre', 'descripcion', 'id_ciudad', 'id_documento'];
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad');
    }

    public function documento()
    {
        return $this->belongsTo(Documento::class, 'id_documento');
    }
}
