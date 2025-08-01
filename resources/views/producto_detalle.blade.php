@section('content')
    <div class="producto-detalle">
        <h1>{{ $producto->nombre }}</h1>
        <img src="{{ asset('images/productos/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" width="300">
        <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
        <p><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
        <p><strong>Cantidad disponible:</strong> {{ $producto->cantidad }}</p>
        <p><strong>Estado:</strong> {{ $producto->estado }}</p>
    </div>
@endsection