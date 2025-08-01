@extends('layouts.app')

@section('title', 'Noticias')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
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
            <img src="{{ asset('uploads/image/20231229/658e242f9e563.png') }}" alt="">
            <p>Noticias</p>
        </div>

        <div class="list">
            <a href="https://es.dahaisolar.com/newsInfo.html">
                <div class="pic">
                    <img src="{{ asset('uploads/image/20231127/656466761dc72.jpg') }}" alt="">
                </div>
                <div class="text">
                    <p class="time">12.27.2022</p>
                    <p class="pt">Dahai Photovoltaic organizó actos de promoción y contratación in situ para proyectos centralizados de generación de energía fotovoltaica destinados a pueblos enteros.</p>
                    <div class="des">
                        Dahai Photovoltaic organizó actos de promoción y contratación in situ para proyectos centralizados de generación de energía fotovoltaica destinados a pueblos enteros.
                    </div>
                    <div class="more">Learn more</div>
                </div>
            </a>
            {{-- Puedes repetir el bloque anterior para más noticias --}}
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

        $('.search a').click(function () {
            var keyword = $('.search input').val();
            if (!isEmpty(keyword)) {
                location.href = '/search-' + keyword + '.html';
            }
        });
    </script>
@endpush
