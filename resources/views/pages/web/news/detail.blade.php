<x-WebLayout title="Instansi">
    <!--====== SLIDER PART START ======-->
    <li></li>
    <li></li>
    <li></li>
    <!--====== SLIDER PART ENDS ======-->

    <!--====== PRODUCTS PART START ======-->

    <section id="products-part" class="pt-65 mb-100">
        <div class="container">
            <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-details">
                            <div class="blog-details-image pb-20">
                                <img class="details" src="{{ asset('uploads/news/' . $news->image) }}" alt="Blog Details">
                            </div>
                            <div class="blog-details-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>{{ $news->title }}</h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <p>
                                        {!! $news->content !!}
                                        </p>
                                    </div> 
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</x-WebLayout>
