<title>Crear venta</title>
<body>
@include('menu')

    <div class="container">
        <form action="{{ route('ventas.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <h5>Por favor, ingrese el número de su venta.</h5>
                </div>
                <div class="col"><input type="number" name="numVenta"></div>
            </div>
            <div class="row">
                <div class="col">
                    <h5>Por favor, ingrese el cliente para la venta.</h5>
                </div>
                <div class="col">
                    <select class="form-select" name="id_cliente">
                        @foreach($clientes as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h5>Por favor, ingrese la fecha.</h5>
                </div>
                <div class="col">
                    <input type="date" name="fecha">
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-3">Realizar venta</button>
        </form>
    </div>





<div class="container mt-3">
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#compuesto">
    Agregar compuesto
  </button>
</div>




























<div class="modal" id="compuesto">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Agregar compuesto</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{ route('ventas.agregarCompuesto') }}" method="POST">
            @csrf
            <label for="sel1" class="form-label">Lista de compuestos:</label>
            <select class="form-select" id="sel1" name="id_producto">
                @foreach($componentes as $componente)
                    <option value="{{ $componente->id }}">{{ $componente->nombre }}</option>
                @endforeach
            </select>
            <label for="cantidad" class="form-label">Ingrese la cantidad</label>
            <input type="number" name="cantidad" id="cantidad" required>
            <br>
            <button type="submit" class="btn btn-primary mt-3">Agregar</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<div class="container mt-3">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre del producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @if(session('detallesVenta') && count(session('detallesVenta')) > 0)
                <?php $detallesVenta = session('detallesVenta'); ?>
                @foreach($detallesVenta as $detalleVenta)
                    @php
                        $componente = \App\Models\Componente::find($detalleVenta['id_producto']);
                    @endphp
                    <tr>
                        <td>{{ $componente->nombre }}</td>
                        <td>{{ $componente->descripcion }}</td>
                        <td>{{ $componente->precio }}</td>
                        <td>{{ $detalleVenta['cantidad'] }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">No hay detalles de venta</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>



</body>
</html>
