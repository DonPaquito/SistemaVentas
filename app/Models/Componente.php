<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock', 'id_categoria'];
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
