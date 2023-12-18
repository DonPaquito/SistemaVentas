<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudad;

class CiudadController extends Controller
{
    // Mostrar todas las ciudades
    public function index()
    {
        $ciudades = Ciudad::all();
        return view('ciudads.index', compact('ciudades'));
    }

    // Mostrar el formulario para agregar una nueva ciudad
    public function create()
    {
        return view('ciudads.create');
    }

    // Almacenar una nueva ciudad en la base de datos
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate(Ciudad::$rules);

        // Crea una nueva ciudad
        Ciudad::create($request->all());

        // Redirige de vuelta al index con un mensaje
        return redirect()->route('ciudads.index')->with('success', 'Ciudad agregada exitosamente.');
    }

    // Mostrar el formulario para editar una ciudad
    public function edit(Ciudad $ciudad)
    {
        return view('ciudads.edit', compact('ciudad'));
    }

    // Actualizar una ciudad en la base de datos
    public function update(Request $request, Ciudad $ciudad)
    {
        // Valida los datos del formulario
        $request->validate(Ciudad::$rules);

        // Actualiza la ciudad
        $ciudad->update($request->all());

        // Redirige de vuelta al index con un mensaje
        return redirect()->route('ciudads.index')->with('success', 'Ciudad actualizada exitosamente.');
    }

    // Eliminar una ciudad de la base de datos
    public function destroy(Ciudad $ciudad)
    {
        // Elimina la ciudad
        $ciudad->delete();

        // Redirige de vuelta al index con un mensaje
        return redirect()->route('ciudads.index')->with('success', 'Ciudad eliminada exitosamente.');
    }
}
