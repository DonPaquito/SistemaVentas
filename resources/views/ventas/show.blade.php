<title>Lista de detalles de venta</title>
@include('menu')

<div class="container" id="pdfContent">
    <h1>Detalles de la Venta</h1>

    @php
        $igv=18;
        $subtotal=0;
    @endphp

    <p>Número de Venta: {{ $venta->numVenta }}</p>
    <p>ID del Cliente: {{ $venta->id_cliente }}</p>
    <p>Fecha de la Venta: {{ $venta->fecha }}</p>

    <h2>Detalles de Venta:</h2>
    @if ($detallesVenta && $detallesVenta->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre del Producto</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detallesVenta as $detalle)
                    <tr>
                        @php
                            $subtotal+=$detalle->producto->precio;
                        @endphp
                        <td>{{ $detalle->producto->nombre }}</td>
                        <td>{{ $detalle->cantidad }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <table class="table table-hover">
            <thead>
                <th>Subtotal</th>
                <th>IGV</th>
                <th>Total</th>
            </thead>
            <tbody>
                <td>@php echo $subtotal; @endphp</td>
                <td>@php echo $igv; @endphp</td>
                <td>@php echo ($subtotal*$igv+$subtotal); @endphp</td>
            </tbody>
        </table>

    @else
        <p>No hay detalles de venta disponibles.</p>
    @endif
</div>


<div class="container mt-3">
    <button id="generarPdfBtn" class="btn btn-secondary mt-3">Generar PDF</button>
</div>

<!-- Agregamos esta sección para ocultar botones con la clase "boton-a-ocultar" -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('pdfButton').addEventListener('click', function () {
            const element = document.getElementById('pdfContent');
            html2pdf(element);
        });
    });
</script>
