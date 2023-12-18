<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Models\Documento;
use App\Models\Ciudad;

class ProveedoresController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function create()
    {
        $documentos = Documento::all();
        $ciudades = Ciudad::all();
        return view('proveedores.create', compact('documentos', 'ciudades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'id_documento' => 'required',
            'id_ciudad' => 'required',
            // Agrega las demás validaciones según tus campos
        ]);

        Proveedor::create($request->all());

        return redirect()->route('proveedores.index')->with('success', 'Proveedor agregado exitosamente.');
    }

    public function edit(Proveedor $proveedor)
    {
        $documentos = Documento::all();
        $ciudades = Ciudad::all();
        return view('proveedores.edit', compact('proveedor', 'documentos', 'ciudades'));
    }

    public function update(Request $request, Proveedor $proveedor)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'id_documento' => 'required',
            'id_ciudad' => 'required',
            // Agrega las demás validaciones según tus campos
        ]);

        $proveedor->update($request->all());

        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado exitosamente.');
    }

    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();

        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminado exitosamente.');
    }
}
