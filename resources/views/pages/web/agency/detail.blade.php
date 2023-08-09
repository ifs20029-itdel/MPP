<x-WebLayout title="Instansi">
    <!--====== SLIDER PART START ======-->
    <li></li>
    <li></li>
    <li></li>
    <!--====== SLIDER PART ENDS ======-->

    <!--====== PRODUCTS PART START ======-->

    <section id="products-part" class="pt-65 mb-100">
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
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkout-box mt-50">
                        <div class="title">
                            <h5 class="text-center">{{ $agency->name }}</h5>
                        </div>
                        <div class="buyer-info">
                            <img src="{{ asset('uploads/agencies/' . $agency->logo) }}" alt="Instansi">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="checkout-box mt-50">
                        <div class="details">
                            <div class="order-list">
                                <div class="item-content mb-5 ">
                                    {{ $agency->description }}
                                </div>
                                <ul class="features-list page-margin-top-section">
                                    <li class="gray">
                                        <div class="icon template-location1">
                                        </div>
                                        <div class="item-content">
                                            <p>Alamat</p>
                                            <h5>{{ $agency->address }}</h5>
                                        </div>
                                    </li>
                                    <li class="gray">
                                        <div class="icon template-location1"></div>
                                        <div class="item-content">
                                            <p>Website</p>
                                            <h5>{{ $agency->website }}</h5>
                                        </div>
                                    </li>
                                    <li class="gray">
                                        <div class="icon template-location1"></div>
                                        <div class="item-content">
                                            <p>Email</p>
                                            <h5>{{ $agency->email }}</h5>
                                        </div>
                                    </li>
                                    <li class="gray">
                                        <div class="icon template-location1"></div>
                                        <div class="item-content">
                                            <p>Phone</p>
                                            <h5>{{ $agency->phone }}</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="checkout-box mt-50">
                        <div class="title">
                            <h5>Jenis Layanan Instansi</h5>
                        </div>
                        <div class="m-5">
                            <div class="singel-services">
                                <div class="services-cont">
                                    @foreach ($agency->agencyServices as $service)
                                        <a href="javascript:;" class="m-1"
                                            onclick="handle_open_modal('{{ route('agency.service.detail', [$agency->slug, $service->slug]) }}', '#detailServerModal', 'GET')">
                                            {{ $service->name }}
                                            <span>
                                                <i class="fa fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="detailServerModal" tabindex="-1" role="dialog" aria-hidden="true">
    </div>
</x-WebLayout>
