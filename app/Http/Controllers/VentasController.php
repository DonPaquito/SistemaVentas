<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\DetalleVenta;
use App\Models\Componente;
use Illuminate\Support\Facades\DB;

class VentasController extends Controller
{
    // Mostrar la lista de ventas
    public function index()
    {
        $ventas = Venta::all();
        return view('ventas.index', compact('ventas'));
    }

    // Mostrar el formulario para crear una nueva venta
    public function create()
    {
        $clientes = Cliente::all();
        $componentes = Componente::all();

        return view('ventas.create', compact('clientes', 'componentes'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'numVenta' => 'required',
            'id_cliente' => 'required',
            // Puedes omitir estas validaciones si estás manejando la lógica con variables de sesión
        ]);

        try {
            $detallesVenta = $request->session()->get('detallesVenta', []);

            $venta = Venta::create([
                'numVenta' => $request->input('numVenta'),
                'id_cliente' => $request->input('id_cliente'),
                'fecha' => $request->input('fecha'),
            ]);

            foreach ($detallesVenta as $detalle) {
                DetalleVenta::create([
                    'id_venta' => $venta->id,
                    'id_producto' => $detalle['id_producto'],
                    'cantidad' => $detalle['cantidad'],
                ]);
                Componente::find($detalle['id_producto'])->decrement('stock', $detalle['cantidad']);
            }
            $request->session()->forget('detallesVenta');
            return redirect()->route('ventas.index')->with('success', 'Venta realizada exitosamente.');
        } catch (\Exception $e) {
            return redirect()->route('ventas.index')->with('error', 'Error al realizar la venta. Detalles: ' . $e->getMessage());
        }
    }


    public function agregarCompuesto(Request $request)
    {
        $componenteId = $request->input('id_producto');
        $cantidad = $request->input('cantidad');

        $detallesVenta = $request->session()->get('detallesVenta', []);
        $detallesVenta[] = [
            'id_producto' => $componenteId,
            'cantidad' => $cantidad,
        ];

        $request->session()->put('detallesVenta', $detallesVenta);



        return redirect()->back()->with('success', 'Compuesto agregado exitosamente.');

    }

    public function show(Venta $venta)
    {
        $detallesVenta = $venta->detallesVenta; // Asegúrate de que el nombre del método coincida con la relación en el modelo

        return view('ventas.show', compact('venta', 'detallesVenta'));
    }

}


