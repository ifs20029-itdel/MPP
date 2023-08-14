<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">{{ $service->name }}
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <span>Silahkan Mendaftar nomor antrian anda</span>
            <span>Nomor Antrian Sekarang : {{ $bookings }}</span>
            <span>Nomor Antrian Sedang Dilayani : {{ $confirmed }}</span>
            <div class="accordion mt-2" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                BOOKING ANTRIAN SEKARANG
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <form action="{{ route('booking.store', $agency->slug) }}" method="POST"
                                id="booking-form-collapseOne-{{ $service->slug }}">
                                <input type="hidden" name="agency_id" value="{{ $agency->id }}">
                                <input type="hidden" name="service_id" value="{{ $service->id }}">
                                <div class="form-group">
                                    <label for="fullname">Nama Anda</label>
                                    <input type="text" class="form-control" id="fullname"
                                        aria-describedby="fullname" placeholder="Nama Anda" name="name">
                                    <small id="fullname" class="form-text text-muted">Masukkan Nama
                                        Anda</small>
                                </div>
                                <div class="form-group">
                                    <label for="noWhatsApp">Nomor WhatsApp</label>
                                    <input type="text" class="form-control" id="noWhatsApp"
                                        aria-describedby="noWhatsApp" placeholder="Masukkan No WhatsApp"
                                        name="whatsapp">
                                    <small id="noWhatsApp" class="form-text text-muted">Silahkan
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
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                BOOKING ANTRIAN BESOK
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <form action="{{ route('booking.store', $agency->slug) }}" method="POST"
                                id="booking-form-collapseTwo-{{ $service->slug }}">
                                <input type="hidden" name="agency_id" value="{{ $agency->id }}">
                                <input type="hidden" name="service_id" value="{{ $service->id }}">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" aria-describedby="tanggal"
                                        placeholder="Tanggal" name="date">
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Nama Anda</label>
                                    <input type="text" class="form-control" id="fullname"
                                        aria-describedby="fullname" placeholder="Nama Anda" name="name">
                                    <small id="fullname" class="form-text text-muted">Masukkan Nama
                                        Anda</small>
                                </div>
                                <div class="form-group">
                                    <label for="noWhatsApp">Nomor WhatsApp</label>
                                    <input type="text" class="form-control" id="noWhatsApp"
                                        aria-describedby="noWhatsApp" placeholder="Masukkan No WhatsApp"
                                        name="whatsapp">
                                    <small id="noWhatsApp" class="form-text text-muted">Silahkan
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
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary"
                onclick="submitBookingForm('{{ $service->slug }}')">Kirim</button>
        </div>
    </div>
</div>

<script src="{{ asset('js/FormControls.js') }}"></script>
<script>
    function submitBookingForm(id) {
        // submit form dimana form id nya diambil dari parameter fungsi dan sesuai dengan collapse yang di klik
        // check collapse yang di klik
        if ($('#collapseOne').hasClass('show')) {
            // jika collapseOne yang di klik maka submit form dengan id booking-form-collapseOne
            $('#booking-form-collapseOne-' + id).on('submit', function(e) {
                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                var type = form.attr('method');
                var data = form.serialize();
                $.ajax({
                    url: url,
                    type: type,
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
                                // close modal
                                $('#collapseOne').collapse('hide');
                                // reset form
                                $('#booking-form-collapseOne-' + id)[0].reset();
                                // close modal
                                $('#' + id).modal('hide');
                                window.location.reload();
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
                    error: function(xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                        console.log(err);
                    }
                });
            });
            $('#booking-form-collapseOne-' + id).submit();
        } else if ($('#collapseTwo').hasClass('show')) {
            // jika collapseTwo yang di klik maka submit form dengan id booking-form-collapseTwo
            $('#booking-form-collapseTwo-' + id).on('submit', function(e) {
                e.preventDefault();
                var selectedDate = new Date($('#tanggal').val());
                var today = new Date();
                var nextWeek = new Date();
                nextWeek.setDate(nextWeek.getDate() + 7);

                if (selectedDate >= today && selectedDate <= nextWeek) {
                    var form = $(this);
                    var url = form.attr('action');
                    var type = form.attr('method');
                    var data = form.serialize();

                    $.ajax({
                        url: url,
                        type: type,
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
                                    // close modal
                                    $('#collapseTwo').collapse('hide');
                                    // reset form
                                    form[0].reset();
                                    // close modal
                                    $('#' + id).modal('hide');
                                    window.location.reload();
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
                        error: function(xhr, status, error) {
                            var err = eval("(" + xhr.responseText + ")");
                            console.log(err);
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Pilih tanggal dari hari ini hingga minggu depan.',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
            $('#booking-form-collapseTwo-' + id).submit();
        }
    }
</script>
