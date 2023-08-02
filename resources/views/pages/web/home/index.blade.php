<x-WebLayout title="Home">
    <!--====== SLIDER PART START ======-->

    <section id="slider-part-1" class="slider-1">
        <div class="slider-active">
            <div class="single-slider bg_cover d-flex align-items-center"
                style="background-image: url({{ asset('images/Poster-1.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">

                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->

            <div class="single-slider bg_cover d-flex align-items-center"
                style="background-image: url({{ asset('images/Poster-2.jpeg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">

                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->

            <div class="single-slider bg_cover d-flex align-items-center"
                style="background-image: url({{ asset('images/Poster-3.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">

                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->

            <div class="single-slider bg_cover d-flex align-items-center"
                style="background-image: url({{ asset('images/Poster-4.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">

                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== PRODUCTS PART START ======-->

    <section id="products-part" class="pt-65">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-15">
                        <h2>AMBIL NOMOR ANTRIAN INSTANSI</h2>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="products-slied owl-carousel">
                    @foreach ($agencies as $agency)
                        <div class="col-lg-12">
                            <div class="singel-products mt-30">
                                <div class="products-image">
                                    <img src="{{ asset('uploads/agencies/' . $agency->logo) }}" alt="Instansi">
                                </div>
                                <div class="products-contant">
                                    <h6 class="products-title"><a
                                            href="{{ route('agency.detail', $agency->slug) }}">{{ $agency->name }}</a>
                                    </h6>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!--====== PRODUCTS PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="services-part" class="pt-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2>BERITA</h2>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($news as $new)
                <div class="col-lg-12">
                    <div class="singel-services mt-45 pb-50">
                        <div class="services-icon">
                            <img class="berita" src="{{ asset('uploads/news/' . $new->image) }}" alt="Icon">
                        </div>
                        <div class="services-cont pt-25 pl-70">
                            <h4>{{ $new->title }}</h4>
                            <p>{!! Str::limit($new->content, 200, '...') !!}</p>
                            <a href="{{ route('news.detail', $new->slug) }}">Baca Selanjutnya<span><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--====== SERVICES PART ENDS ======-->

</x-WebLayout>
