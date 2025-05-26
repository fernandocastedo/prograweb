@extends('layouts.app')

@section('title', 'Listado de productos')

@section('content')
    <h1 class="mb-4">Productos de Ferretería</h1>
    <!-- Carrusel de productos destacados -->
    <div id="carouselProductos" class="carousel slide mb-4" data-bs-ride="carousel" style="background-color: #333; border-radius: 10px;">   
        <div class="carousel-inner">
            @foreach($productos->take(3) as $index => $destacado)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ asset('images/' . $destacado->imagen) }}" class="d-block w-100" alt="{{ $destacado->nombre }}"
                        style="height: 300px; object-fit: contain; object-position: center; background-color: #ffffff;">

                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                        <h5>{{ $destacado->nombre }}</h5>
                        <p>Bs {{ $destacado->precio }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProductos" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselProductos" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Filtro por categoría -->
    <form method="GET" action="{{ route('productos.index') }}" class="mb-4">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="categoria" class="col-form-label">Filtrar por categoría:</label>
            </div>
            <div class="col-auto">
                <select name="categoria" id="categoria" class="form-select">
                    <option value="">Todas</option>
                    @foreach($categorias as $cat)
                        <option value="{{ $cat }}" {{ $cat == $categoria ? 'selected' : '' }}>
                            {{ $cat }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
    </form>

    <div class="row">
        @foreach($productos as $producto)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                    <div class="card-body">
                        @php
                            $nombreTraducido = match(true) {
                                str_contains($producto->nombre, 'quo') => 'Linterna',
                                str_contains($producto->nombre, 'minus') => 'Protector',
                                str_contains($producto->nombre, 'eum') => 'RingAlarma',
                                default => $producto->nombre,
                            };
                        @endphp
                        <h5 class="card-title">{{ $nombreTraducido }}</h5>
                        <p class="card-text"><strong>Precio:</strong> Bs {{ $producto->precio }}</p>
                        <p class="card-text"><strong>Marca:</strong> {{ $producto->marca }}</p>
                        <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-primary">Ver detalle</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
