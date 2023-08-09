<!--====== jquery js ======-->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

<!--====== Bootstrap js ======-->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!--====== Owl Carousel js ======-->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

<!--====== Slick js ======-->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>

<!--====== Nice Number js ======-->
<script src="{{ asset('assets/js/jquery.nice-number.min.js') }}"></script>

<!--====== Nice Select js ======-->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

<!--====== Validator js ======-->
<script src="{{ asset('assets/js/validator.min.js') }}"></script>

<!--====== Ajax Contact js ======-->
<script src="{{ asset('assets/js/ajax-contact.js') }}"></script>

<!--====== Main js ======-->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!--====== Google Map js ======-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
<script src="{{ asset('assets/js/map-script.js') }}"></script>
<script src="{{ asset('js/sweetalert.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function handle_open_modal(url, modal, method) {
        $.ajax({
            type: method,
            url: url,
            success: function(html) {
                $(modal).html(html);
                $(modal).modal('show');
            },
            error: function() {
                $(content).html('<h3>Ajax Bermasalah !!!</h3>')
            },
        });
    }
</script>
