@extends('app')
@section('main')
    <div class="container-fluid">
        <div class="card-group flex-wrap">
            <div class="col-12">
                <h2 class="text-alin-center">Detalle Producto</h2>
                <div class="card-group flex-wrap">
                    @if (!empty($producto))
                        <div class="col-12">
                            <div class="card border-warning d-flex align-items-center justify-content-center text-center"
                                style="height: 100%;">
                                <!-- Product image-->
                                <img src="{{ $producto->imagen }}"
                                    style="height: auto; width: auto; max-height: 600px; max-width: 500px;"
                                    alt="{{ $producto->nombre }}">
                                <div class="card-body">
                                    <div style="max-height: 50px; overflow-y: auto;">
                                        <h4 class="card-title text-center">
                                            <b>{{ ucwords($producto->nombre) }}</b>
                                        </h4>
                                    </div>
                                    <div style="ml-1 max-height: 100px; overflow-y: auto;">
                                        <h4>${{ $producto->precio }}</h4>

                                    </div>
                                    <h5 class="titulo">Descripción:</h6>
                                        <div style="max-height: auto;">
                                            <p class="card-text m-3">
                                                {{ $producto->descripcion }}
                                            </p>
                                        </div>
                                        <div style="max-height: auto;">
                                            <h5 class="titulo">Beneficios:</h5>
                                            <p class="card-text m-3">
                                                {{ $producto->beneficio }}
                                            </p>
                                        </div>
                                        <div style="max-height: 60px; overflow-y: auto;">
                                            @if ($producto->oferta > 0)
                                                <h5><span class="text-danger">Descuento: <br></span><span
                                                        class="text-primary">{{ intval($producto->oferta) }} %</span></h5>
                                            @endif
                                        </div>
                                        <div class="card-footer" style="position: absolute; bottom: 0; left: 0; right: 0;">
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('detalle', ['id' => $producto->id]) }}"
                                                    class="btn btn-info w-50 agregar-carrito">
                                                    Agregar <i class="fa fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between m-4">
                <button type="button" onclick="location.href='/'" class="btn btn-secondary">Atras</button>
                <button type="button" onclick="location.href='/'" class="btn btn-primary">Pagar Ahora <i
                        class="fas fa-credit-card"></i></button>
            </div>

        </div>
    </div>
@endsection
