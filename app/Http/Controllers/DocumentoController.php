<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;

class DocumentoController extends Controller
{
    // Mostrar todos los documentos
    public function index()
    {
        $documentos = Documento::all();
        return view('documentos.index', compact('documentos'));
    }

    // Mostrar el formulario para agregar un nuevo documento
    public function create()
    {
        return view('documentos.create');
    }

    // Almacenar un nuevo documento en la base de datos
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'codigo' => 'required',
            // Agrega las demás validaciones según tus campos
        ]);

        // Crea un nuevo documento
        Documento::create($request->all());

        // Redirige de vuelta al index con un mensaje
        return redirect()->route('documentos.index')->with('success', 'Documento agregado exitosamente.');
    }

    // Mostrar el formulario para editar un documento
    public function edit(Documento $documento)
    {
        return view('documentos.edit', compact('documento'));
    }

    // Actualizar un documento en la base de datos
    public function update(Request $request, Documento $documento)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'codigo' => 'required',
            // Agrega las demás validaciones según tus campos
        ]);

        // Actualiza el documento
        $documento->update($request->all());

        // Redirige de vuelta al index con un mensaje
        return redirect()->route('documentos.index')->with('success', 'Documento actualizado exitosamente.');
    }

    // Eliminar un documento de la base de datos
    public function destroy(Documento $documento)
    {
        // Elimina el documento
        $documento->delete();

        // Redirige de vuelta al index con un mensaje
        return redirect()->route('documentos.index')->with('success', 'Documento eliminado exitosamente.');
    }
}
