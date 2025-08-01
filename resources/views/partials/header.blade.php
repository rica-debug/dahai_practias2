<div class="header">
    <div class="d1">
        <div class="container">
            <div class="l">
                <a href="tel:+49(0)4212042155">
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
                <a href="{{ route('contact') }}" class="btn">
                    <img src="{{ asset('images/msg.png') }}" alt="">
                    <p>Póngase en contacto con nosotros</p>
                </a>
            </div>
        </div>
    </div>

    <div class="d2">
        <div class="l">
            <a href="{{ route('index') }}" class="logo">
                <img src="{{ asset('uploads/image/20240117/65a73f44af937.svg') }}" alt="">
            </a>
            <div class="links">
                <div class="item">
                    <a href="{{ route('index') }}" class="a1">
                        <p>Introduce</p>
                        <img src="{{ asset('images/line.png') }}" alt="">
                    </a>
                    <div class="aList">
                        <div class="box">
                            <a href="{{ route('company') }}">Sobre nosotros</a>
                            <a href="{{ route('career') }}">Ocupación</a>
                            <a href="{{ route('contact') }}">Enlace</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="{{ route('products') }}" class="a1">
                        <p>Producto</p>
                        <img src="{{ asset('images/line.png') }}" alt="">
                    </a>
                    <div class="aList">
                        <div class="box">
                            <a href="{{ route('products.solar-modules') }}">Módulos fotovoltaicos</a>
                            <a href="{{ route('products.inverters') }}">Inversor</a>
                            <a href="{{ route('products.storage-solutions') }}">Batería</a>
                            <a href="{{ route('products.evcharger') }}">Pila de carga</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="{{ route('news') }}" class="a1">
                        <p>Noticias</p>
                        <img src="{{ asset('images/line.png') }}" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('join') }}" class="a1">
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
                <a href="javascript:;">Buscar</a>
            </div>
            <div class="language">
                <div class="l1">
                    <img src="{{ asset('images/language.png') }}" alt="">
                    <p>Spain</p>
                </div>
                <a href="https://dahaisolar.com/" style="top:100%;">EN</a>
                <a href="https://it.dahaisolar.com/" style="top:225%;">IT</a>
                <a href="https://fr.dahaisolar.com/" style="top:350%;">FR</a>
                <a href="https://cn.dahaisolar.com/" style="top:475%;">中文</a>
                <a href="{{ route('index') }}" style="top:600%;">ES</a>
                <a href="https://ro.dahaisolar.com/" style="top:725%;">RO</a>
                <a href="https://nl.dahaisolar.com/" style="top:850%;">NL</a>
                <a href="https://www.dahaisolar.com/?lang=vn" style="top:975%;">VN</a>
            </div>
            <!-- Icono navbox -->
            <div class="navbox" id="navbox">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>
</div>
