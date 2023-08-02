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
                            <h5 class="text-center">POLRESTA MEDAN</h5>
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
                                        <a href="#" class="m-1" type="button" data-toggle="modal"
                                            data-target="#{{ $service->slug }}">
                                            {{ $service->name }}
                                            <span>
                                                <i class="fa fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            @foreach ($agency->agencyServices as $service)
                                <div class="modal fade" id="{{ $service->slug }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Pengaduan
                                                    Kehilangan
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <span>Silahkan Mendaftar nomor antrian anda</span>
                                                <span>Nomor Antrian Sekarang : </span>
                                                <div class="accordion mt-2" id="accordionExample">
                                                    <div class="card">
                                                        <div class="card-header" id="headingTwo">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed" type="button"
                                                                    data-toggle="collapse" data-target="#collapseOne"
                                                                    aria-expanded="false" aria-controls="collapseOne">
                                                                    BOOKING ANTRIAN SEKARANG
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapseOne" class="collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <form action="{{ route('booking.store') }}"
                                                                    method="POST"
                                                                    id="booking-form-{{ $service->slug }}">
                                                                    <input type="hidden" name="agency_id"
                                                                        value="{{ $agency->id }}">
                                                                    <input type="hidden" name="service_id"
                                                                        value="{{ $service->id }}">
                                                                    <div class="form-group">
                                                                        <label for="fullname">Nama Anda</label>
                                                                        <input type="text" class="form-control"
                                                                            id="fullname" aria-describedby="fullname"
                                                                            placeholder="Nama Anda" name="name">
                                                                        <small id="fullname"
                                                                            class="form-text text-muted">Masukkan Nama
                                                                            Anda</small>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="noWhatsApp">Nomor WhatsApp</label>
                                                                        <input type="text" class="form-control"
                                                                            id="noWhatsApp"
                                                                            aria-describedby="noWhatsApp"
                                                                            placeholder="Masukkan No WhatsApp"
                                                                            name="whatsapp">
                                                                        <small id="noWhatsApp"
                                                                            class="form-text text-muted">Silahkan
                                                                            Masukkan
                                                                            No WhatsApp Anda agar kami mudah
                                                                            menghubungi</small>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingTwo">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed" type="button"
                                                                    data-toggle="collapse" data-target="#collapseTwo"
                                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                                    BOOKING ANTRIAN BESOK
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <label for="tanggal">Tanggal</label>
                                                                        <input type="date" class="form-control"
                                                                            id="tanggal" aria-describedby="tanggal"
                                                                            placeholder="Tanggal" name="date">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="fullname">Nama Anda</label>
                                                                        <input type="text" class="form-control"
                                                                            id="fullname" aria-describedby="fullname"
                                                                            placeholder="Nama Anda" name="name">
                                                                        <small id="fullname"
                                                                            class="form-text text-muted">Masukkan Nama
                                                                            Anda</small>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="noWhatsApp">Nomor WhatsApp</label>
                                                                        <input type="text" class="form-control"
                                                                            id="noWhatsApp"
                                                                            aria-describedby="noWhatsApp"
                                                                            placeholder="Masukkan No WhatsApp"
                                                                            name="whatsapp">
                                                                        <small id="noWhatsApp"
                                                                            class="form-text text-muted">Silahkan
                                                                            Masukkan
                                                                            No WhatsApp Anda agar kami mudah
                                                                            menghubungi</small>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <button type="button" class="btn btn-primary"
                                                    onclick="submitBookingForm('booking-form-{{ $service->slug }}')">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('custom_js')
        <script>
            function submitBookingForm(id) {
                // on submit form
                $('#' + id).submit(function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: (data) => {
                            this.reset();
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: 'Data berhasil dikirim',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });
                });
            }
        </script>
    @endsection
</x-WebLayout>
