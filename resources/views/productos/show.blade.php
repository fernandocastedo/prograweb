@extends('layouts.app')

@section('title', 'Detalle del producto')

@section('content')
    <a href="{{ route('productos.index') }}" class="btn btn-secondary mb-3">← Volver</a>
    <div class="card shadow">
        <img src="{{ asset('images/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}">
        <div class="card-body">
            <h3 class="card-title">{{ $producto->nombre }}</h3>
            <p><strong>Precio:</strong> Bs {{ $producto->precio }}</p>
            <p><strong>Categoría:</strong> {{ $producto->categoria }}</p>
            <p><strong>Stock:</strong> {{ $producto->stock }}</p>
            <p><strong>Marca:</strong> {{ $producto->marca }}</p>
            <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
        </div>
    </div>
@endsection
