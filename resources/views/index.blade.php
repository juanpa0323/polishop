@extends('app')
@section('main')
    <div class="compra-ya my-5">
        <img src="{{ asset('assets/IMAGENES/compraahora.png.png') }}" width="500" alt="Compra Ya">
    </div>

    <!-- Sección de círculos -->
    <div class="circulos">
        <div class="circulo informatica">
            <img src="{{ asset('assets/IMAGENES/informatica.png.png') }}" width="50" alt="Informática" class="boton-imagen">
            <p>INFORMÁTICA</p>
        </div>
        <div class="circulo mercado">
            <img src="{{ asset('assets/IMAGENES/mercado.png.png') }}" alt="Mercado" class="boton-imagen">
            <p>MERCADO</p>
        </div>
        <div class="circulo moda">
            <img src="{{ asset('assets/IMAGENES/moda.png.png') }}" alt="Moda" class="boton-imagen">
            <p>MODA</p>
        </div>
    </div>
    <div class="anuncio-ofertas">
        <img src="{{ asset('assets/IMAGENES/publicidad.jpeg') }}" height="200" width="250" alt="Ofertas">
    </div>
    @include('productos')
@endsection
