@extends('layouts.app')

@section('title', $producto->nombre)

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endpush

@section('content')
<div class="home">
    <div class="main mt-0">
        <div class="t">{{ $producto->nombre }}</div>
        <div class="t2">Detalle del producto</div>
        <div class="list">
            <a>
                <div class="pic">
                    <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre }}">
                </div>
                <div class="txt">
                    <p class="name">{{ $producto->nombre }}</p>
                    <p class="tag">{{ number_format($producto->precio, 2) }} USD</p>
                    <div class="btn">Disponible: {{ $producto->cantidad }}</div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
        if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
            document.addEventListener("WeixinJSBridgeReady", function () {
                document.getElementById("video").play();
            }, false);
        }
    </script>
@endpush
