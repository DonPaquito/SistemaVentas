<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public function componente() {
        return $this->hasMany(Componente::class);
    }
    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}
