<x-WebAdmin title="Membuat Instansi">
    <div id="kt_header" style="" class="header align-items-stretch">
        <!--begin::Brand-->
        <div class="header-brand">
            <!--begin::Logo-->
            <a href="{{ route('home') }}">
                <img alt="Logo" src="{{ asset('images/Logo_Mpp.png') }}" class="h-50px h-lg-50px" />
            </a>
            <!--end::Logo-->
            <!--begin::Aside minimize-->
            <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize"
                data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                data-kt-toggle-name="aside-minimize">
                <i class="ki-duotone ki-entrance-right fs-1 me-n1 minimize-default">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <i class="ki-duotone ki-entrance-left fs-1 minimize-active">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
            <!--end::Aside minimize-->
            <!--begin::Aside toggle-->
            <div class="d-flex align-items-center d-lg-none me-n2" title="Show aside menu">
                <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>
            <!--end::Aside toggle-->
        </div>
        <!--end::Brand-->
        <!--begin::Toolbar-->
        <div class="toolbar d-flex align-items-stretch">
            <!--begin::Toolbar container-->
            <div
                class="container-xxl py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
                <!--begin::Page title-->
                <div class="page-title d-flex justify-content-center flex-column me-5">
                    <!--begin::Title-->
                    <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">User</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted text-hover-primary">Beranda</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">User</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">List User</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
    </div>

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Category-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" data-filter="search"
                                    class="form-control form-control-solid w-250px ps-12"
                                    placeholder="Search by name" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Add customer-->
                            <a href="{{ route('backend.user.create') }}" class="btn btn-primary">Tambah
                                User</a>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="booking_table">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            <div
                                                class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                    data-kt-check-target="#role_table .form-check-input"
                                                    value="1" />
                                            </div>
                                        </th>
                                        <th class="w-10px pe-2">No</th>
                                        <th class="min-w-250px">Nama</th>
                                        <th class="min-w-250px">Whatsapp</th>
                                        <th class="min-w-250px">Agency Service</th>
                                        <th class="text-end min-w-70px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @foreach ($bookings as $item)
                                        <tr>
                                            <!--begin::Checkbox-->
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox"
                                                        value={{ $item->id }} data-filter="booking_id" />
                                                </div>
                                            </td>
                                            <!--end::Checkbox-->
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>

                                            <td>
                                                <div class="d-flex">
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <span class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                                            data-filter="booking_name">{{ $item->name }}</span>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <span
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">{{ $item->whatsapp }}</span>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <span
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">{{ $item->agencyService->name }}</span>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center"
                                                    data-kt-menu-trigger="click"
                                                    data-kt-menu-placement="bottom-end">Actions
                                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    @if ($item->status == 0)
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="javascript:;" class="menu-link px-3"
                                                                data-id="{{ $item->id }}"
                                                                data-filter="process_row">Process</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    @elseif ($item->status == 1)
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="javascript:;" class="menu-link px-3"
                                                                data-id="{{ $item->id }}"
                                                                data-filter="finish_row">Finish</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    @else<!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="javascript:;" class="menu-link px-3"
                                                                data-id="{{ $item->id }}"
                                                                data-filter="delete_row">Delete</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    @endif

                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Category-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
    @section('custom_js')
        <script>
            "use strict";
            var Booking = function() {
                const _initTable = () => {
                    var e, t, n = () => {
                        t = document.querySelector("#booking_table");
                        t && (e = $(t).DataTable({
                            info: !1,
                            order: [],
                            pageLength: 10,
                            columnDefs: [{
                                orderable: !1,
                                targets: 0
                            }]
                        }), e.on("draw", (function() {
                            n()
                        })), document.querySelector('[data-filter="search"]').addEventListener("keyup", (
                            function(
                                t) {
                                e.search(t.target.value).draw()
                            })), n())
                    }
                }

                const _process = () => {
                    $(document).on("click", '[data-filter="process_row"]', (function(t) {
                        t.preventDefault();
                        const n = $(this).closest("tr").find('[data-filter="booking_id"]').val();
                        const id = $(this).data('id');
                        Swal.fire({
                            text: "Are you sure you want to process this booking?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, process it!",
                            cancelButtonText: "No, cancel!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                                cancelButton: "btn fw-bold btn-active-light-primary"
                            }
                        }).then((function(t) {
                            t.value ? $.ajax({
                                url: '/backend/booking/process/' + id,
                                type: "PUT",
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    id: n
                                },
                                success: function(t) {
                                    Swal.fire({
                                        text: t.message,
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn fw-bold btn-primary"
                                        }
                                    }).then((function() {
                                        e.ajax.reload()
                                    }))
                                }
                            }) : "cancel" === t.dismiss && Swal.fire({
                                text: "Your booking is not processed!.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            })
                        }));
                    }));
                }

                const _finish = () => {
                    $(document).on("click", '[data-filter="finish_row"]', (function(t) {
                        t.preventDefault();
                        const n = $(this).closest("tr").find('[data-filter="booking_id"]').val();
                        const id = $(this).data('id');
                        Swal.fire({
                            text: "Are you sure you want to finish this booking?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, finish it!",
                            cancelButtonText: "No, cancel!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                                cancelButton: "btn fw-bold btn-active-light-primary"
                            }
                        }).then((function(t) {
                            t.value ? $.ajax({
                                url: '/backend/booking/finish/' + id,
                                type: "PUT",
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    id: n
                                },
                                success: function(t) {
                                    Swal.fire({
                                        text: t.message,
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn fw-bold btn-primary"
                                        }
                                    }).then((function() {
                                        e.ajax.reload()
                                    }))
                                }
                            }) : "cancel" === t.dismiss && Swal.fire({
                                text: "Your booking is not finished!.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            })
                        }));
                    }));
                }

                const _delete = () => {
                    $(document).on("click", '[data-filter="delete_row"]', (function(t) {
                        t.preventDefault();
                        const n = $(this).closest("tr").find('[data-filter="booking_id"]').val();
                        const id = $(this).data('id');
                        Swal.fire({
                            text: "Are you sure you want to delete this booking?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, delete it!",
                            cancelButtonText: "No, cancel!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                                cancelButton: "btn fw-bold btn-active-light-primary"
                            }
                        }).then((function(t) {
                            t.value ? $.ajax({
                                url: '/backend/booking/delete/' + id,
                                type: "DELETE",
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    id: n
                                },
                                success: function(t) {
                                    Swal.fire({
                                        text: t.message,
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn fw-bold btn-primary"
                                        }
                                    }).then((function() {
                                        e.ajax.reload()
                                    }))
                                }
                            }) : "cancel" === t.dismiss && Swal.fire({
                                text: "Your booking is safe!.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary"
                                }
                            })
                        }));
                    }));
                }

                return {
                    init: function() {
                        _initTable();
                        _process();
                        _finish();
                        _delete();
                    }
                }
            }();
            KTUtil.onDOMContentLoaded((function() {
                Booking.init();
            }));
        </script>
    @endsection
</x-WebAdmin>
