<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Componente;

class ComponentesController extends Controller
{
    public function index()
    {
        $categorias=Categoria::all();
        $componentes = Componente::all();
        return view('componentes.index', compact('componentes','categorias'));
    }

    public function create()
    {
        $categorias=Categoria::all();
        return view('componentes.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'id_categoria' => 'required',
            // Agrega las demás validaciones según tus campos
        ]);

        Componente::create($request->all());

        return redirect()->route('componentes.index')->with('success', 'Componente agregado exitosamente.');
    }

    public function edit(Componente $componente)
    {
        $categorias=Categoria::all();
        return view('componentes.edit', compact('componente','categorias'));
    }

    public function update(Request $request, Componente $componente)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'id_categoria' => 'required',
            // Agrega las demás validaciones según tus campos
        ]);

        $componente->update($request->all());

        return redirect()->route('componentes.index')->with('success', 'Componente actualizado exitosamente.');
    }

    public function destroy(Componente $componente)
    {
        $componente->delete();

        return redirect()->route('componentes.index')->with('success', 'Componente eliminado exitosamente.');
    }
}
