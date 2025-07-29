@extends('layouts.app')

@section('title', 'Dahai PV - Sitio web oficial')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
    <style>
        body {
            width: 100%;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
            font-family: 'ExoSoft-Regular', sans-serif;
        }

        /* ===== VIDEO SECTION ===== */
        .video-section {
            position: relative;
            height: 100vh;
            min-height: 600px;
            overflow: hidden;
        }

        .video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            z-index: 0;
        }

        .video-content {
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            z-index: 1;
            padding: 0 20px;
        }

        .video-title {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .video-subtitle {
            font-size: 1.5rem;
            font-weight: 400;
            line-height: 1.4;
            max-width: 800px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* MAIN CONTENT STYLES */
        .mainContainer {
            background: white;
            padding: 4vw 0 0 0;
        }

        .about {
            max-width: 1368px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .about .t {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .about .t p {
            color: #E49D12;
            font-size: 18px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .about .t img {
            margin-left: 20px;
            display: block;
            transform: translateY(-5px);
        }

        .about .title {
            color: #202020;
            font-weight: 600;
            font-size: 48px;
            text-transform: uppercase;
        }

        .about .des {
            color: #202020;
            font-size: 18px;
            width: 60%;
            margin: 2vw 0;
        }

        .about .btn a {
            background: #E49D12;
            color: #202020;
            padding: 1rem 1.5rem;
            display: inline-block;
            font-size: 24px;
            font-weight: 600;
            text-transform: uppercase;
            transition: all 600ms;
        }

        .about .btn a:hover {
            background-color: #000;
            color: #fff;
        }

        /* RANGE SECTION */
        .range {
            margin-bottom: 5vw;
        }

        .range .dom1 {
            max-width: 1368px;
            margin: 5vw auto;
            padding: 0 20px;
        }

        .range .dom1 .t {
            color: #E49D12;
            font-size: 18px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .range .dom1 .title {
            color: #202020;
            font-weight: 600;
            font-size: 48px;
            text-transform: uppercase;
            margin-top: 15px;
        }

        .range .dom1 .des {
            color: #202020;
            font-size: 18px;
        }

        .range .dom1 .des p {
            margin-top: 2vw;
        }

        /* SWIPER STYLES */
        .range .swiper {
            width: 100%;
        }

        .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem {
            height: 416px;
            width: 100%;
            background-color: #ededed;
            transition: background 0.3s;
            display: block;
            color: #000000;
        }

        .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem .icon {
            height: 250px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 600ms;
            margin: 0 auto;
        }

        .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem .icon img {
            max-width: 100%;
            max-height: 250px;
            object-fit: contain;
            transition: all 600ms;
        }

        .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem .pt {
            padding: 1.25rem 0;
            text-align: center;
            font-size: 30px;
            font-family: "ExoSoft-Bold";
            text-transform: uppercase;
            width: 90%;
            margin: 0 auto;
            transition: all 600ms;
        }

        .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem .txt {
            width: 90%;
            margin: 0 auto;
            font-size: 20px;
            font-family: "ExoSoft-Light";
            transform: translateY(100px);
        }

        .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem:hover {
            background-color: #fc0;
        }

        .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem:hover .icon {
            height: 100px;
            width: 100px;
        }

        .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem:hover .txt {
            transform: translateY(0);
        }

        .range .swiper .swiper-pagination {
            display: flex;
            justify-content: center;
            position: static;
            width: 100%;
            margin-top: 2vw;
        }

        .range .swiper .swiper-pagination .swiper-pagination-bullet {
            width: 24px;
            height: 3px;
            background-color: #b2b2b2;
            opacity: 1;
            border-radius: 0;
            margin: 0 5px;
            transition: all 600ms;
        }

        .range .swiper .swiper-pagination .swiper-pagination-bullet-active {
            background: #E49D12;
        }

        /* TEAM SECTION */
        .team {
            background: url({{ asset('images/team.png') }}) no-repeat;
            background-size: cover;
            padding: 18vw 0 5vw 0;
        }

        .team .content {
            max-width: 1368px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .team .content .t {
            font-size: 24px;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
        }

        .team .content .title {
            color: white;
            font-size: 64px;
            font-weight: 600;
            text-transform: uppercase;
            margin: 20px 0;
        }

        .team .content a {
            background: #E49D12;
            color: #202020;
            padding: 1rem 1.5rem;
            display: inline-block;
            font-size: 24px;
            font-weight: 600;
            text-transform: uppercase;
            transition: all 600ms;
        }

        .team .content a:hover {
            background-color: #000;
            color: #fff;
        }

        /* RESPONSIVE STYLES */
        @media screen and (max-width: 1400px) {
            .about, .range .dom1, .team .content {
                max-width: 95%;
            }
            
            .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem {
                height: 366px;
            }
            
            .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem .icon {
                height: 200px;
            }
            
            .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem .icon img {
                max-height: 200px;
            }
            
            .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem .txt {
                font-size: 18px;
            }
        }

        @media screen and (max-width: 1200px) {
            .about .des {
                width: 80%;
            }
        }

        @media screen and (max-width: 992px) {
            .video-title {
                font-size: 2.5rem;
            }
            
            .video-subtitle {
                font-size: 1.2rem;
            }
            
            .about .title, .range .dom1 .title {
                font-size: 36px;
            }
            
            .team .content .title {
                font-size: 48px;
            }
        }

        @media screen and (max-width: 768px) {
            .video-section {
                min-height: 500px;
            }
            
            .video-title {
                font-size: 2rem;
            }
            
            .video-subtitle {
                font-size: 1rem;
            }
            
            .about .des {
                width: 100%;
                font-size: 16px;
            }
            
            .about .title, .range .dom1 .title {
                font-size: 28px;
            }
            
            .team .content .title {
                font-size: 36px;
            }
            
            .team .content a, .about .btn a {
                font-size: 18px;
            }
            
            .range .swiper {
                width: 90%;
                margin: 30px auto;
            }
            
            .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem {
                background-color: #fc0;
            }
            
            .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem .icon {
                height: 100px;
                width: 100px;
            }
            
            .range .swiper .swiper-container .swiper-wrapper .swiper-slide .sItem .txt {
                transform: translateY(0);
            }
        }

        @media screen and (max-width: 576px) {
            .video-title {
                font-size: 1.8rem;
            }
            
            .about .t p {
                font-size: 16px;
            }
            
            .about .t img {
                width: 80px;
            }
            
            .team {
                padding: 25vw 0 8vw 0;
            }
        }
    </style>
@endpush

@section('content')
<div class="home">
    <script src="https://res.zvo.cn/translate/translate.js"></script>

    <div class="main">
        <!-- Improved Video Section -->
        <section class="video-section">
            <div class="video-container">
                <video
                    id="hero-video"
                    preload="metadata"
                    loop autoplay muted playsinline
                    webkit-playsinline x5-video-player-type="h5"
                    x5-video-player-fullscreen="true"
                    x5-video-orientation="portrait">
                    <source src="https://qiniu.mfdemo.cn/test/2fbb9ec8b5b3c8da02a1cf537cf2ee72-20240409094917.mp4">
                </video>
                <div class="video-overlay"></div>
            </div>
            
            <div class="video-content">
                <h1 class="video-title">Nuevas energías<br>Nuevo mundo</h1>
                <p class="video-subtitle">Soluciones personalizadas<br>Fabricante de energía solar</p>
            </div>
        </section>

        <!-- Main Content -->
        <div class="mainContainer">
            <div class="about">
                <div class="t">
                    <p>Sobre nosotros</p>
                    <img src="{{ asset('uploads/image/20240117/65a73f89947ba.svg') }}" alt="">
                </div>
                <div class="title">NUEVA ENERGÍA</div>
                <div class="title" style="transform: translateY(-5px)">NUEVO MUNDO</div>
                <div class="des">
                    <p>Fundada en 2011 y propiedad de una empresa central, Dahai Photovoltaic es un fabricante de energía renovable con una considerable capacidad de producción de módulos solares de alta eficiencia de 5GW y una impresionante capacidad de producción de silicio de 10GW. Operamos una línea de producción de módulos automatizados de última generación, capaz de producir módulos con múltiples cabinas 166-210 unidades. Nuestra gama de productos ofrece una gama de potencia de salida que varía de 365W a 670W.</p>
                    <p>Dahai Photovoltaic es un pionero en el campo de la energía fotovoltaica distribuida en China. Bajo la guía de nuestro concepto de marca "Nueva energía, nuevo mundo", nuestra motivación se refleja en nuestro concepto de cliente primero. Estamos firmemente comprometidos con la creación de energía verde, Abogar por la restauración de la ecología de la tierra y construir un entorno verde y cero carbono.</p>
                    <p>Our strong commitment to professionalism, design, R & D and manufacturing enables us to provide our valued customers with excellent photovoltaic products, comprehensive system solutions and related services.</p>
                </div>
                <div class="btn">
                    <a href="{{ route('company') }}">Más información</a>
                </div>
            </div>

            <div class="range">
                <div class="dom1">
                    <div class="t">Solución Integral Fotovoltaica</div>
                    <div class="title">Nuestra misión</div>
                    <div class="des">
                        <p>Como fabricante de energía solar, estamos comprometidos a proporcionar productos solares confiables e innovadores utilizando tecnología avanzada y procesos de fabricación respetuosos con el medio ambiente. Nuestro equipo está formado por expertos profesionales que trabajan incansablemente para garantizar que todos los productos se esfuerzan por la excelencia y producen una excelente producción de energía con la mejor eficiencia e innovación. Nuestro objetivo es proporcionar productos solares de alta calidad que permitan a las personas, las comunidades y las empresas reducir su huella ambiental y adoptar un futuro más sostenible. En el mar de la energía solar, estamos convencidos de que la energía solar tiene el poder de proporcionar energía limpia y sostenible al mundo y desempeña un papel vital en la solución de los problemas ambientales. Es por eso que nuestra misión es fabricar células fotovoltaicas de alta gama y productos de energía verde para empresas y consumidores.</p>
                        <p>Con un almacén en una ubicación estratégica en todo el mundo, el mar ofrece un ecosistema eficiente de ventas a servicios, y ofrecemos una garantía líder en la industria y soporte en el sitio para cada producto. Ofrecemos servicios personalizados y soluciones de sistemas integrales, uno a uno, adaptadas a sus necesidades específicas, para que la energía solar sea confiable y asequible para todos.</p>
                    </div>
                </div>
                <div class="swiper">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="sItem" href="{{ route('products.solar-modules') }}">
                                    <div class="icon">
                                        <img src="{{ asset('images/r1.png') }}" alt="">
                                    </div>
                                    <div class="pt">Módulos fotovoltaicos</div>
                                    <div class="txt">
                                        Un panel fotovoltaico es un dispositivo capaz de convertir la energía solar en energía eléctrica.
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="sItem" href="{{ route('products.inverters') }}">
                                    <div class="icon">
                                        <img src="{{ asset('images/r2.png') }}" alt="">
                                    </div>
                                    <div class="pt">Inversor</div>
                                    <div class="txt">
                                        Elija optimizadores de potencia de nuestra cartera para obtener la máxima potencia y la máxima producción de energía.
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="sItem" href="{{ route('products.storage-solutions') }}">
                                    <div class="icon">
                                        <img src="{{ asset('uploads/image/20231228/658d62a33e6b0.svg') }}" alt="">
                                    </div>
                                    <div class="pt">Batería</div>
                                    <div class="txt">
                                        Soluciones de almacenamiento de energía para un suministro continuo.
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="sItem" href="{{ route('products.evcharger') }}">
                                    <div class="icon">
                                        <img src="{{ asset('uploads/image/20231228/658d637f1d827.svg') }}" alt="">
                                    </div>
                                    <div class="pt">Pila de carga</div>
                                    <div class="txt">
                                        Cargadores para vehículos eléctricos con tecnología avanzada.
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="team">
                <div class="content">
                    <div class="t">Ocupación</div>
                    <div class="title">Ser parte de nuestro equipo</div>
                    <a href="{{ route('career') }}">to the career page</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/rellax.js') }}"></script>
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/setcookie.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize WOW.js
            new WOW().init();
            
            // Initialize Rellax
            var rellax = new Rellax('.rellax');
            
            // Initialize Swiper
            var swiper = new Swiper('.range .swiper-container', {
                speed: 1000,
                loop: true,
                slidesPerView: 1,
                autoplay: {
                    disableOnInteraction: false,
                    delay: 3000
                },
                spaceBetween: 18,
                pagination: {
                    el: '.range .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    640: { slidesPerView: 2 },
                    1024: { slidesPerView: 4 },
                    1450: { slidesPerView: 4 }
                }
            });
            
            // Ensure video autoplays on mobile
            var video = document.getElementById('hero-video');
            if (video) {
                video.play().catch(e => {
                    // Fallback in case autoplay is blocked
                    video.muted = true;
                    video.play();
                });
            }
        });
    </script>
@endpush  