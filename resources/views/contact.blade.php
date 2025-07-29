@extends('layouts.app')

@section('title', 'Contacto - Dahai Solar')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
<div class="home">
    <script src="https://res.zvo.cn/translate/translate.js"></script>
    
    {{-- Header --}}
    <div class="header">
        <div class="d1">
            <div class="container">
                <div class="l">
                    <a href="telto:+49(0)421 2042 155">
                        <img src="{{ asset('images/phone.png') }}" alt="">
                        <p>+49(0)421 2042 155</p>
                    </a>
                    <a href="mailto:info@dahaisolar.de">
                        <img src="{{ asset('images/email.png') }}" alt="">
                        <p>info@dahaisolar.de</p>
                    </a>
                </div>
                <div class="r">
                    <a href="javascript:;" class="icon">
                        <img src="{{ asset('uploads/image/20240117/65a74063da6bc.svg') }}" alt="">
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100064287032583" class="icon" target="_blank">
                        <img src="{{ asset('uploads/image/20240117/65a740a3eae8f.svg') }}" alt="">
                    </a>
                    <a href="https://www.instagram.com/dahaisolar_2011/" class="icon" target="_blank">
                        <img src="{{ asset('uploads/image/20240117/65a740bed4c42.svg') }}" alt="">
                    </a>
                    <a href="{{ url('contact') }}" class="btn">
                        <img src="{{ asset('images/msg.png') }}" alt="">
                        <p>Póngase en contacto con nosotros</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="d2">
            <div class="l">
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('uploads/image/20240117/65a73f44af937.svg') }}" alt="">
                </a>
                <div class="links">
                    <div class="item ">
                        <a href="{{ url('contact') }}" class="a1">
                            <p>Introduce</p>
                            <img src="{{ asset('images/line.png') }}" alt="">
                        </a>
                        <div class="aList">
                            <div class="box">
                                <a href="{{ url('company') }}">Sobre nosotros</a>
                                <a href="{{ url('career') }}">Ocupación</a>
                                <a href="{{ url('contact') }}">Enlace</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="{{ url('products') }}" class="a1">
                            <p>Producto</p>
                            <img src="{{ asset('images/line.png') }}" alt="">
                        </a>
                        <div class="aList">
                            <div class="box">
                                <a href="{{ url('products-SolarModules') }}">Módulos fotovoltaicos</a>
                                <a href="{{ url('products-Inverters') }}">Inversor</a>
                                <a href="{{ url('products-StorageSolutions') }}">Batería</a>
                                <a href="{{ url('products-EVCharger') }}">Pila de carga</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="{{ url('news') }}" class="a1">
                            <p>Noticias</p>
                            <img src="{{ asset('images/line.png') }}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('join') }}" class="a1">
                            <p>Distribuidores</p>
                            <img src="{{ asset('images/line.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="r">
                <div class="search">
                    <img src="{{ asset('images/search.png') }}" alt="">
                    <input type="text" placeholder="Buscar">
                    <a href="javascript:;">
                        Buscar
                    </a>
                </div>
                <div class="language">
                    <div class="l1">
                        <img src="{{ asset('images/language.png') }}" alt="">
                        <p>Spain</p>
                    </div>
                    {{-- Idiomas --}}
                    <a href="https://dahaisolar.com/" style="top:100%">EN</a>
                    <a href="https://it.dahaisolar.com/" style="top:225%">IT</a>
                    <a href="https://fr.dahaisolar.com/" style="top:350%">FR</a>
                    <a href="https://cn.dahaisolar.com/" style="top:475%">中文</a>
                    <a href="{{ url('/') }}" style="top:600%">ES</a>
                    <a href="https://ro.dahaisolar.com/" style="top:725%">RO</a>
                    <a href="https://nl.dahaisolar.com/" style="top:850%">NL</a>
                    <a href="https://www.dahaisolar.com/?lang=vn" style="top:975%">VN</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Contenido principal --}}
    <div class="main">
        <div class="banner">
            <img src="{{ asset('contact.html') }}" alt="">
            <p>Enlace</p>
        </div>
        <div class="section">
            <div class="t">Contacte con nosotros</div>
            <div class="des">
                ¿Desea consultar nuestros productos y servicios o solicitar una cotización personalizada? Nuestro equipo está a su disposición para ayudarle a tiempo. Póngase en contacto con nosotros por correo electrónico y le responderemos lo antes posible. También puede contactarnos por teléfono durante nuestras horas de trabajo.
            </div>
            <div class="phone">Tel:+49(0)421 2042 155</div>
            <div class="t2">ADD: Marcusallee 3.28359 Bremen,Germany<br> E-mail: info@dahaisolar.de</div>
            <div class="icons">
                <a href="{{ url('contact') }}"><img src="{{ asset('images/c4.png') }}" alt=""></a>
                <a href="{{ url('contact') }}"><img src="{{ asset('uploads/image/20240111/659fbe2278ccd.png') }}" alt=""></a>
                <a href="{{ url('contact') }}"><img src="{{ asset('images/c2.png') }}" alt=""></a>
                <a href="{{ url('contact') }}"><img src="{{ asset('images/c1.png') }}" alt=""></a>
            </div>
        </div>

        {{-- Formulario --}}
        <div class="form">
            <div class="item">
                <input type="text" name="company" class="company" placeholder="Company*">
            </div>
            <div class="items">
                <div class="item"><input type="text" name="firstname" class="firstname"  placeholder="First Name*"></div>
                <div class="item"><input type="text" name="lastname" class="lastname" placeholder="Last Name*"></div>
            </div>
            <div class="item"><input type="text" name="address" class="address" placeholder="Address*"></div>
            <div class="items">
                <div class="item"><input type="text" name="zipcode" class="zipcode" placeholder="ZipCode*"></div>
                <div class="item"><input type="text" name="city" class="city" placeholder="City*"></div>
            </div>
            <div class="item"><input type="text" name="country" class="country" placeholder="Country*"></div>
            <div class="item"><input type="text" name="phone"  class="phone" placeholder="Telephone"></div>
            <div class="item"><input type="text" name="email"  class="email" placeholder="E-Mail*"></div>
            <div class="item"><textarea  name="message"  class="message" placeholder="Your message*"></textarea></div>
            <div class="tip">* Required Field</div>
            <div class="notice">
                <p>Please agree to our</p><a href="javascript:;">privacy policy</a><p>for contacting us.</p>
            </div>
            <div class="agree"><div class="chose"></div><p>I agree to the processing of my data by Dahai Solar. </p></div>
            <div class="submit"><p>Send</p><img src="{{ asset('images/r.png') }}" alt=""></div>
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
                $(this).toggleClass('checked')
            })
        })
    </script>
    <script>
        function isEmpty(str) {
          return /^\s*$/.test(str);
        }
        function validateEmail(email) {
            var regex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;
            return regex.test(email);
        }
        function error(name,msg="This field is required."){
            return '<label class="error" for="'+name+'">'+msg+'</label>'
        }
        $('.submit').click(function(){
            $('.error').remove();
            var company = $('.company').val();
            var firstname = $('.firstname').val();
            var lastname = $('.lastname').val();
            var address = $('.address').val();
            var zipcode = $('.zipcode').val();
            var city = $('.city').val();
            var country = $('.country').val();
            var phone = $('.phone').val();
            var email = $('.email').val();
            var message = $('.message').val();
            
            var is_ajax = true;
            if(isEmpty(company)){
                $('.company').parent('.item').append(error('company'));
                is_ajax = false;
            }
            if(isEmpty(firstname)){
                $('.firstname').parent('.item').append(error('firstname'));
                is_ajax = false;
            }
            if(isEmpty(lastname)){
                $('.lastname').parent('.item').append(error('lastname'));
                is_ajax = false;
            }
            if(isEmpty(address)){
                $('.address').parent('.item').append(error('address'));
                is_ajax = false;
            }
            if(isEmpty(zipcode)){
                $('.zipcode').parent('.item').append(error('zipcode'));
                is_ajax = false;
            }
            if(isEmpty(city)){
                $('.city').parent('.item').append(error('city'));
                is_ajax = false;
            }
            if(isEmpty(country)){
                $('.country').parent('.item').append(error('country'));
                is_ajax = false;
            }
            if(isEmpty(email)){
                $('.email').parent('.item').append(error('email'));
                is_ajax = false;
            }else if(!validateEmail(email)){
                $('.email').parent('.item').append(error('email','Please enter a valid email address'));
                is_ajax = false;
            }
            if(isEmpty(message)){
                $('.message').parent('.item').append(error('message'));
                is_ajax = false;
            }
            if(!$('.chose').hasClass('checked')){
                var error_msg = error('chose');
                error_msg = '<div class="chose-tips">'+error_msg+'</div>';
                $('.chose').parent('.agree').after(error_msg);
                is_ajax = false;
            }
            if(!is_ajax){
                return false;
            }
            $.ajax({
                type: "post",
                url: "/common/form.php",
                datatype : 'json',
                data : {
                    "action":'message',
                    "company":company,
                    "firstname":firstname,
                    "lastname":lastname,
                    "address":address,
                    "zipcode":zipcode,
                    "phone":phone,
                    "city":city,
                    "country":country,
                    "email":email,
                    "message":message,
                },
                success:function(d) {
                    $('.form inout').val('');
                    alert('Message successful');
                }
            });
        });
        $('.search a').click(function(){
            var keyword = $('.search input').val();
            if(!isEmpty(keyword)){
                location.href = '/search-'+keyword+'.html';
            }
        })
    </script>
@endpush
