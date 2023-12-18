<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    // Mostrar el formulario para agregar un nuevo cliente
    public function create()
    {
        return view('categorias.create');
    }

    // Almacenar un nuevo cliente en la base de datos
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        // Crea un nuevo cliente
        Categoria::create($request->all());

        // Redirige de vuelta al index con un mensaje
        return redirect()->route('categorias.index')->with('success', 'Categoria agregada exitosamente.');
    }

    // Mostrar el formulario para editar un cliente
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    // Actualizar un cliente en la base de datos
    public function update(Request $request, Categoria $categoria)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        // Actualiza el cliente
        $categoria->update($request->all());

        // Redirige de vuelta al index con un mensaje
        return redirect()->route('categorias.index')->with('success', 'Categoria actualizada exitosamente.');
    }

    // Eliminar un cliente de la base de datos
    public function destroy(Categoria $categoria)
    {
        // Elimina el cliente
        $categoria->delete();

        // Redirige de vuelta al index con un mensaje
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }
}

