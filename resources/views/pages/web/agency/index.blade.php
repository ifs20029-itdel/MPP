<x-WebLayout title="Instansi">
    <!--====== SLIDER PART START ======-->
    <li></li>
    <li></li>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== PRODUCTS PART START ======-->

    <section id="products-part" class="pt-65 mb-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-15">
                        <h2>INSTANSI</h2>
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
                @foreach ($agencies as $agency)
                    <div class="col-lg-3 col-md-3 col-sm-3">
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
                    </div>
                @endforeach
            </div>
        </div>
    </section> 
    <!--====== PRODUCTS PART ENDS ======-->


    <!--====== SERVICES PART ENDS ======-->

</x-WebLayout>
