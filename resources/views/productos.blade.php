<div class="container-fluid">
    <div class="text-center my-5">
        <h3 class="ml-3 font-weight-bold text-center my-5">Todos los Productos</span></h3>
    </div>
    <div class="card-group flex-wrap">
        @if (!empty($productos))
            @foreach ($productos as $producto)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                    <div class="card d-flex align-items-center justify-content-center text-center"
                        style="height: 100%;">
                        <img src="{{ $producto->imagen }}" class="card-img mx-auto" alt="{{ $producto->imagen }}">

                        <div class="card-body">
                            <div style="max-height: 50px; overflow-y: auto;">
                                <h4 class="card-title text-center">
                                    <b>{{ ucwords($producto->nombre) }}</b>
                                </h4>
                            </div>
                            <div style="ml-1 max-height: 100px; overflow-y: auto;">
                                <h4>${{ $producto->precio }}</h4>

                            </div>
                            <h6>Descripción:</h6>
                            <div style="max-height: 100px; overflow-y: auto; height: 50px">
                                <p class="card-text">
                                    {{ substr($producto->descripcion, 0, 50) }}...
                                </p>
                            </div>
                            <div style="max-height: 60px; overflow-y: auto;">
                                @if ($producto->oferta > 0)
                                    <h5><span style="color: greenyellow">Descuento: <br></span><span
                                            class="text-warning">{{ intval($producto->oferta) }} %</span></h5>
                                @endif
                            </div>
                            <div class="card-footer" style="position: absolute; bottom: 0; left: 0; right: 0;">
                                <div class="d-flex justify-content-center">
                                    <a href="/" class="btn btn-success w-30 mx-3">
                                        Agregar <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <a href="{{ route('detalle', ['id' => $producto->id]) }}" class="btn btn-info w-30 mx-3">
                                        Ver Detalles <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
