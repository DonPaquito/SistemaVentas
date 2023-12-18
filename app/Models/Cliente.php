<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'direccion', 'fecha_nacimiento', 'id_documento', 'id_ciudad'];
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad');
    }

    public function documento()
    {
        return $this->belongsTo(Documento::class, 'id_documento');
    }
}
