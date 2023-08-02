<x-WebLayout title="Berita">
    <!--====== SLIDER PART START ======-->
    <li></li>
    <li></li>
    <!--====== SLIDER PART ENDS ======-->

    <!--====== PRODUCTS PART START ======-->

    <section id="products-part" class="pt-65">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2>BERITA MPP</h2>
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
                @foreach ($news as $item)
                    <div class="col-lg-12">
                        <div class="singel-services mt-45 pb-50">
                            <div class="services-icon">
                                <img class="berita" src="{{ asset('uploads/news/' . $item->image) }}" alt="Icon">
                            </div>
                            <div class="services-cont pt-25 pl-70">
                                <h4>{{ $item->title }}</h4>
                                <p>
                                    {!! Str::limit($item->content, 200, '...') !!}
                                </p>
                                <a href="{{ route('news.detail', $item->slug) }}">Read More <span><i
                                            class="fa fa-long-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>
        </div>
    </section>

    <!--====== SERVICES PART ENDS ======-->

</x-WebLayout>
