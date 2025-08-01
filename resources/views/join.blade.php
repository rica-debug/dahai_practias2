@extends('layouts.app')

@section('title', 'Distribuidores')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/join.css') }}">
@endpush

@section('content')
<div class="home">
    <div class="menuList">
        <div class="lan animated fadeInUp">
            <a href="{{ url('/') }}" class="active">ES</a>
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
                <p>Introduce</p>
                <img src="{{ asset('images/r.png') }}" alt="">
            </a>
            <div class="types_top">
                <a href="{{ url('company') }}">Sobre nosotros</a>
                <a href="{{ url('career') }}">Ocupación</a>
                <a href="{{ url('join') }}">Distribuidores</a>
                <a href="{{ url('contact') }}">Enlace</a>
            </div>
        </div>
        <div class="item">
            <a class="animated fadeInUp" href="{{ url('products') }}">
                <p>Producto</p>
            </a>
        </div>
        <div class="item">
            <a class="animated fadeInUp" href="{{ url('news') }}">
                <p>Noticias</p>
            </a>
        </div>
    </div>

    <div class="main">
        <div class="banner">
            <img src="{{ asset('uploads/image/20231121/655c69157e2f9.jpg') }}" alt="">
            <p>Distribuidores</p>
        </div>

        <div class="section1">
            <div class="item">
                <div class="icon">
                    <img src="{{ asset('uploads/image/20231121/655c6c672b31d.png') }}" alt="">
                </div>
                <div class="pt">Identidad</div>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="{{ asset('uploads/image/20231121/655c6d627fd29.png') }}" alt="">
                </div>
                <div class="pt">Oportunidad</div>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="{{ asset('uploads/image/20231121/655c6d53432e5.png') }}" alt="">
                </div>
                <div class="pt">Respeto</div>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="{{ asset('uploads/image/20231121/655c6c78259cf.png') }}" alt="">
                </div>
                <div class="pt">Plataforma</div>
            </div>
        </div>

        <div class="section3">
            <div class="content">
                <div class="l">
                    <div class="t">Reclutamiento de distribuidores de servicios globales</div>
                    <div class="des">
                        <p>Sea Solar puede operar en todo el mundo gracias al apoyo de nuestros distribuidores seleccionados. Trabajamos en estrecha colaboración con nuestros distribuidores para mantener nuestros servicios personalizados y siempre ser accesibles para los clientes finales. En caso de duda, nuestros expertos también brindan consultas in situ, implementación de proyectos y servicio postventa.</p>
                        <p>Si está interesado en unirse a nuestra red de distribuidores, contáctenos:</p>
                        <p>Teléfono: 86-546-7082088</p>
                        <p>Dirección: Zona industrial de Daozhuang, condado de Guangrao, ciudad de Dongying, provincia de Shandong</p>
                        <p>Correo electrónico: info@dahaisolar.com</p>
                    </div>
                </div>
                <div class="r">
                    <img src="{{ asset('uploads/image/20231229/658e2a99b98e9.jpg') }}" alt="">
                </div>
            </div>
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
