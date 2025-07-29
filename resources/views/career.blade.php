@extends('layouts.app')

@section('title', 'Ocupación')

@section('content')
<div class="home">
    <script src="https://res.zvo.cn/translate/translate.js"></script>

    <div class="pheader">
        <div class="menu">
            <a href="{{ route('index') }}" target="_self" class="animated fadeInLeft">
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
            <a href="{{ route('index') }}" class="active">ES</a>
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
                <a href="{{ route('company') }}">Sobre nosotros</a>
                <a href="{{ route('career') }}">Ocupación</a>
                <a href="{{ route('join') }}">Distribuidores</a>
                <a href="{{ route('contact') }}">Enlace</a>
            </div>
        </div>
        <div class="item">
            <a class="animated fadeInUp" href="{{ route('products') }}">
                <p>Producto</p>
            </a>
        </div>
        <div class="item">
            <a class="animated fadeInUp" href="{{ route('news') }}">
                <p>Noticias</p>
            </a>
        </div>
    </div>

    <div class="main">
        <div class="banner">
            <img src="{{ asset('images/jban.png') }}" alt="">
            <p>Ocupación</p>
        </div>

        <div class="section1">
            <div class="t">
                <span>¡Éxito! </span><span>Trabajo en equipo</span>
            </div>
            <div class="des">
                Respetando los valores personales, liberando el potencial y mejorando el espíritu, nos adherimos al concepto orientado a las personas y trabajamos juntos para lograr el crecimiento común de la empresa y los empleados. Ocean solar concede gran importancia al desarrollo profesional de los empleados. A lo largo de los años, hemos establecido un sistema perfecto de formación del personal, proporcionando a los empleados un camino profesional de "doble vía" para garantizar que no tengan "techo" en el desarrollo profesional.
            </div>
        </div>

        <div class="goto">
            <div class="l">
                <p>Sus perspectivas preliminares para el futuro.</p>
                <p>Nuestro tablero de reclutamiento de puestos ofrece una visión detallada de las oportunidades específicas en su área de especialización.</p>
                <a href="#">Discover our vacancies</a>
            </div>
            <div class="r">
                <p>Explorar oportunidades en nuestro tablero de reclutamiento de puestos</p>
            </div>
        </div>

        <div class="section2">
            <div class="box">
                <div class="imageWithTextOverlapping"
                    style="background-image: url({{ asset('uploads/image/20231229/658e23056f519.jpg') }});">
                    <div class="contentPart rellax" data-rellax-speed="3" data-rellax-percentage="0.5">
                        <div class="t1">Energía solar marina como empleador</div>
                        <div class="t2">Quiénes somos.</div>
                        <div class="des">
                            <p>Nuestra cultura se basa en puertas abiertas, niveles planos, comunicación eficiente y apoyo mutuo, creando un entorno de trabajo basado en la confianza y el respeto. Fomentamos debates directos y abiertos sobre diversos temas, más allá de los límites de los departamentos, departamentos y niveles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section2">
            <div class="box">
                <div class="imageWithTextOverlapping image-right"
                    style="background-image: url({{ asset('uploads/image/20231229/658e203eb2da1.jpg') }});">
                    <div class="contentPart rellax" data-rellax-speed="3" data-rellax-percentage="0.5">
                        <div class="t1">Identificación</div>
                        <div class="t2"></div>
                        <div class="des">
                            <p>Cultivating and nurturing a team that achieves market leadership, creates organizational advantages, leads with value orientation, and possesses a sense of mission and responsibility, to support the realization of strategic goals, is the ongoing pursuit of talent at Dahai Solar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section3" style="background-image: url({{ asset('uploads/image/20231229/658e207565475.jpg') }}); height: 568px;">
            <div class="content">
                <div class="box">
                    <div class="t">Professionals and young professionals</div>
                    <div class="t2">Opening doors for career newbies and achievers alike</div>
                    <a href="#">Find out more</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/career.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/rellax.js') }}"></script>
    <script>
        new WOW().init();
        var rellax = new Rellax('.rellax');
    </script>
    <script>
        function isEmpty(str) {
            return /^\s*$/.test(str);
        }
        $('.search a').click(function(){
            var keyword = $('.search input').val();
            if(!isEmpty(keyword)){
                location.href = '/search-'+keyword+'.html';
            }
        })
    </script>
@endpush
