<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Documento;
use App\Models\Ciudad;

class ClientesController extends Controller
{
    // Mostrar todos los clientes
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    // Mostrar el formulario para agregar un nuevo cliente
    public function create()
    {
        $documentos = Documento::all();
        $ciudades = Ciudad::all();
        return view('clientes.create', compact('documentos', 'ciudades'));
    }

    // Almacenar un nuevo cliente en la base de datos
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
            'id_documento' => 'required',
            'id_ciudad' => 'required',
            // Agrega las demás validaciones según tus campos
        ]);

        // Crea un nuevo cliente
        Cliente::create($request->all());

        // Redirige de vuelta al index con un mensaje
        return redirect()->route('clientes.index')->with('success', 'Cliente agregado exitosamente.');
    }

    // Mostrar el formulario para editar un cliente
    public function edit(Cliente $cliente)
    {
        $documentos = Documento::all();
        $ciudads = Ciudad::all();
        return view('clientes.edit', compact('cliente', 'documentos', 'ciudads'));
    }

    // Actualizar un cliente en la base de datos
    public function update(Request $request, Cliente $cliente)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
            'id_documento' => 'required',
            'id_ciudad' => 'required',
            // Agrega las demás validaciones según tus campos
        ]);

        // Actualiza el cliente
        $cliente->update($request->all());

        // Redirige de vuelta al index con un mensaje
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente.');
    }

    // Eliminar un cliente de la base de datos
    public function destroy(Cliente $cliente)
    {
        // Elimina el cliente
        $cliente->delete();

        // Redirige de vuelta al index con un mensaje
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }
}

