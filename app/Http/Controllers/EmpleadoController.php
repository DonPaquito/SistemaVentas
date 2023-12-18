<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Ciudad;
use App\Models\Documento;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        $documentos = Documento::all();
        $ciudades = Ciudad::all();
        return view('empleados.create', compact('documentos', 'ciudades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
            'sueldo' => 'required',
            'id_documento' => 'required',
            'id_ciudad' => 'required',
            // Agrega las demás validaciones según tus campos
        ]);

        Empleado::create($request->all());

        return redirect()->route('empleados.index')->with('success', 'Empleado agregado exitosamente.');
    }

    public function edit(Empleado $empleado)
    {
        $documentos = Documento::all();
        $ciudades = Ciudad::all();
        return view('empleados.edit', compact('empleado', 'documentos', 'ciudades'));
    }

    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
            'sueldo' => 'required',
            'id_documento' => 'required',
            'id_ciudad' => 'required',
            // Agrega las demás validaciones según tus campos
        ]);

        $empleado->update($request->all());

        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado exitosamente.');
    }

    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado exitosamente.');
    }
}
