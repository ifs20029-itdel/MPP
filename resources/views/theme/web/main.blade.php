<!doctype html>
<html lang="en">

@include('theme.web.head')
@yield('custom_head')

<body>

    <!--====== PREALOADER PART START ======-->

    <div class="preloader">
        <div class="thecube">
            <div class="cube c1"></div>
            <div class="cube c2"></div>
            <div class="cube c4"></div>
            <div class="cube c3"></div>
        </div>
    </div>

    <!--====== PREALOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    <header id="header-part">
        <!--===== NAVBAR START =====-->
        <div class="navigation">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">

                            <a class="navbar-brand" href="/">
                                <img src="{{ asset('images/Logo_Mpp.png') }}" class="logo_mpp" alt="Logo">
                            </a> <!-- Logo -->

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button> <!-- toggle Button -->

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a href="/">BERANDA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../pages/profil">PROFIL</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../pages/berita">BERITA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../pages/statistik">STATISTIK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../pages/instansi">INSTANSI</a>
                                        </li>
                                    <li class="nav-item">
                                        <a href="../pages/kritik">KRITIK & SARAN</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../pages/survei">SURVEI</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </nav> <!-- nav -->

                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!--===== NAVBAR ENDS =====-->
    </header>

    <!--====== HEADER PART ENDS ======-->
    
    {{ $slot }}

    <!--====== FOOTER PART START ======-->

    @include('theme.web.footer')

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a href="#" class="back-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>
    </a>

    <!--====== BACK TO TOP PART ENDS ======-->
    @include('theme.web.js')
    @yield('custom_js')

</body>

</html>