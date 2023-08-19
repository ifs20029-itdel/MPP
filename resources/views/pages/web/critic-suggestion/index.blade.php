<x-WebLayout title="Kritik dan Saran">
    <!--====== SLIDER PART START ======-->
    <li></li>
    <li></li>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== PRODUCTS PART START ======-->

    <section id="products-part" class="pt-65">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-15">
                        <h2>Kritik & Saran</h2>
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
                <div class="col-lg-12">
                    <div class="contact-form pt-45">
                        <h6>Berikan Keluhan anda</h6>
                        <form id="form_input" action="{{ route('critic-suggestion.store') }}" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <label>Instansi :</label>
                                        <div class="produtct">
                                            <select name="agency_id" class="form-control">
                                                <option value="">Pilih Instansi</option>
                                                @foreach ($agencies as $agency)
                                                    <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <label>Layanan Instansi :</label>
                                        <div class="produtct">
                                            <select name="agency_id" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <label>Nomor Booking :</label>
                                        <div class="produtct">
                                            <select name="booking_id" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                        <label>Kritik atau Saran anda :</label>
                                        <textarea name="message" data-error="Wajib diisi."></textarea>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="singel-form">
                                        <div class="mb-50">
                                            <button type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== PRODUCTS PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <!--====== SERVICES PART ENDS ======-->
    @section('custom_js')
        <script src="{{ asset('js/FormControls.js') }}"></script>
        <script>
            $(document).ready(function() {
                // on change agency
                $('select[name="agency_id"]').on('change', function() {
                    var agency_id = $(this).val();
                    if (agency_id) {
                        $.ajax({
                            url: '/get-agency-services/' + agency_id,
                            type: 'GET',
                            dataType: 'json',
                            success: function(data) {
                                $('select[name="service_id"]').empty();
                                $('select[name="service_id"]').append(
                                    '<option value="">Pilih Layanan</option>'
                                );
                                $.each(data, function(key, value) {
                                    $('select[name="service_id"]').append(
                                        '<option value="' + key + '">' + value +
                                        '</option>'
                                    );
                                });
                            }
                        });
                    } else {
                        $('select[name="service_id"]').empty();
                    }
                });

                // on change service
                $('select[name="service_id"]').on('change', function() {
                    var service_id = $(this).val();
                    if (service_id) {
                        $.ajax({
                            url: '/get-bookings/' + service_id,
                            type: 'GET',
                            dataType: 'json',
                            success: function(data) {
                                $('select[name="booking_id"]').empty();
                                $('select[name="booking_id"]').append(
                                    '<option value="">Pilih Nomor Booking</option>'
                                );
                                $.each(data, function(key, value) {
                                    $('select[name="booking_id"]').append(
                                        '<option value="' + key + '">' + value +
                                        '</option>'
                                    );
                                });
                            }
                        });
                    } else {
                        $('select[name="booking_id"]').empty();
                    }
                });

                // on submit
                $('#form_input').on('submit', function(e) {
                    e.preventDefault();
                    var form = $(this);
                    var url = form.attr('action');
                    var method = form.attr('method');
                    var data = form.serialize();
                    $.ajax({
                        url: url,
                        method: method,
                        data: data,
                        success: function(response) {
                            if (response.status == 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.message,
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(function() {
                                    // reset form
                                    $('#form_input')[0].reset();
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal',
                                    text: response.message,
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }
                        },
                        error: function(xhr) {
                            var res = xhr.responseJSON;
                            if ($.isEmptyObject(res) == false) {
                                $.each(res.errors, function(key, value) {
                                    $('#' + key)
                                        .closest('.form-group')
                                        .find('.help-block')
                                        .text(value);
                                });
                            }
                        }
                    });
                });
            });
        </script>
    @endsection
</x-WebLayout>
