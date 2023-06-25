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

                            <a class="navbar-brand" href="index.html">
                                <img src="images/logo.png" alt="Logo">
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
                                        <a href="about.html">BERANDA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html">PROFIL</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html">BERITA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html">STATISTIK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html">INSTANSI</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html">KRITIK & SARAN</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html">SURVEI</a>
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
        <img src="images/back-to-top.png" alt="Icon">
    </a>

    <!--====== BACK TO TOP PART ENDS ======-->
    @include('theme.web.js')
    @yield('custom_js')

</body>

</html>