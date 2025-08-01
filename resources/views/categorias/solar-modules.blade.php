@extends('layouts.app')

@section('title', 'Productos por categoría')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endpush

@section('content')
<div class="home">
    <div class="pheader">
        <div class="menu">
            <a href="{{ url('/') }}" target="_self" class="animated fadeInLeft">
                <img src="{{ asset('uploads/image/20240117/65a73f44af937.svg') }}" alt="">
            </a>
            <div class="search">
                <input type="text" placeholder="Search">
                <div class="icon" id="phone_search">
                    <img src="{{ asset('images/search.png') }}" alt="">
                </div>
            </div>
            <div class="navbox">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>

    <div class="menuList">
        <div class="lan animated fadeInUp">
            <a href="#" class="active">ES</a>
            <a href="http://es-dahai.mfweb.club/">ES</a>
            <a href="http://nl-dahai.mfweb.club/">NI</a>
            <a href="http://ro-dahai.mfweb.club/">RO</a>
            <a href="http://it-dahai.mfweb.club/">IT</a>
            <a href="http://fr-dahai.mfweb.club/">FR</a>
            <a href="http://de-dahai.mfweb.club/">DE</a>
            <a href="https://cn.dahaisolar.com/">中文</a>
        </div>
        <div class="item">
            <a class="animated fadeInUp">
                <p>enterprise</p>
                <img src="{{ asset('images/r.png') }}" alt="">
            </a>
            <div class="types_top">
                <a href="#">Sobre nosotros</a>
                <a href="#">Ocupación</a>
                <a href="#">Distribuidores</a>
                <a href="#">Enlace</a>
            </div>
        </div>
        <div class="item">
            <a class="animated fadeInUp" href="{{ route('products') }}">
                <p>Producto</p>
            </a>
        </div>
        <div class="item">
            <a class="animated fadeInUp" href="#">
                <p>Noticias</p>
            </a>
        </div>
    </div>

    <div class="main mt-0">
        <div class="t">Módulos fotovoltaicos</div>
        <div class="t2">Los paneles solares son el corazón de los sistemas fotovoltaicos.</div>
        <div class="des">Ofrecemos una amplia selección de varias categorías de rendimiento y siempre ofrecemos productos de alta calidad a precios justos. Nuestra cartera de productos es una prueba de nuestra experiencia, que incluye módulos eficientes y de alto rendimiento en todos los tamaños, de fabricantes de renombre para satisfacer todas las necesidades.        </div>
        <div class="dt">Filter</div>

        <div class="list">
            @forelse($productos as $producto)
                <a href="{{ route('producto.show', $producto->id) }}">
                    <div class="pic">
                        <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre }}">
                    </div>
                    <div class="txt">
                        <p class="name">{{ $producto->nombre }}</p>
                        <p class="tag">{{ number_format($producto->precio, 2) }} MXN</p>
                        <div class="btn">Disponible: {{ $producto->cantidad }}</div>
                    </div>
                </a>
            @empty
                <p>No hay productos en esta categoría.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
    <script>
        new WOW().init();
        if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
            document.addEventListener("WeixinJSBridgeReady", function () {
                document.getElementById("video").play();
            }, false);
        }

        $(function () {
            $('.chose').click(function () {
                $(this).toggleClass('checked');
            });
        });

        function isEmpty(str) {
            return /^\s*$/.test(str);
        }

        $('.search a').click(function(){
            var keyword = $('.search input').val();
            if(!isEmpty(keyword)){
                location.href = '/search-' + keyword + '.html';
            }
        });
    </script>
@endpush
