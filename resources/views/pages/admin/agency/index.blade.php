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
                    <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Instansi</h1>
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
                        <li class="breadcrumb-item text-muted">Instansi</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">List Instansi</li>
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
                            <a href="{{ route('backend.agency.create') }}" class="btn btn-primary">Tambah Instansi</a>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="agency_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#role_table .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th class="w-10px pe-2">No</th>
                                    <th class="min-w-250px">Instansi</th>
                                    <th class="min-w-250px">Status Instansi</th>
                                    <th class="text-end min-w-70px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach ($agencies as $agency)
                                    <tr>
                                        <!--begin::Checkbox-->
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox"
                                                    value={{ $agency->id }} data-filter="agency_id" />
                                            </div>
                                        </td>
                                        <!--end::Checkbox-->
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>

                                        <td>
                                            <div class="d-flex">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ route('backend.agency.edit', $agency->id) }}"
                                                    class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url('{{ asset('uploads/agencies/' . $agency->logo) }}')"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ route('backend.agency.edit', $agency->id) }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                                        data-filter="agency_name">{{ $agency->name }}</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <!--begin::Badges-->
                                            @if ($agency->status == 'publish')
                                                <div class="badge badge-light-success">Publish</div>
                                            @else
                                                <div class="badge badge-light-danger">Unpublish</div>
                                            @endif
                                            <!--end::Badges-->
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ route('backend.agency.edit', $agency->id) }}"
                                                        class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="javascript:;" class="menu-link px-3"
                                                        data-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
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
            var Agency = function() {
                var t, e, n = () => {
                    t.querySelectorAll('[data-filter="delete_row"]').forEach((t => {
                        t.addEventListener("click", (function(t) {
                            t.preventDefault();
                            const n = t.target.closest("tr"),
                                o = n.querySelector(
                                    '[data-filter="agency_name"]').innerText,
                                i = n.querySelector(
                                    '[data-filter="agency_id"]');
                            Swal.fire({
                                text: "Are you sure you want to delete " + o + "?",
                                icon: "warning",
                                showCancelButton: !0,
                                buttonsStyling: !1,
                                confirmButtonText: "Yes, delete!",
                                cancelButtonText: "No, cancel",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-danger",
                                    cancelButton: "btn fw-bold btn-active-light-primary"
                                }
                            }).then((function(t) {
                                if (t.value) {
                                    var url =
                                        "{{ route('backend.agency.destroy', ':id') }}";
                                    url = url.replace(':id', i.value);
                                    $.ajax({
                                        url: url,
                                        type: "DELETE",
                                        data: {
                                            _token: "{{ csrf_token() }}"
                                        },
                                        success: function(response) {
                                            Swal.fire({
                                                text: "You have deleted " +
                                                    o +
                                                    "!.",
                                                icon: "success",
                                                buttonsStyling:
                                                    !1,
                                                confirmButtonText: "Ok, got it!",
                                                customClass: {
                                                    confirmButton: "btn fw-bold btn-primary"
                                                }
                                            }).then((
                                                function() {
                                                    e.row($(
                                                            n
                                                        ))
                                                        .remove()
                                                        .draw()
                                                }))
                                        }
                                    })
                                } else {
                                    "cancel" === t.dismiss && Swal.fire({
                                        text: o + " was not deleted.",
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn fw-bold btn-primary"
                                        }
                                    })
                                }
                            }))
                        }))
                    }))
                };
                return {
                    init: function() {
                        (t = document.querySelector("#agency_table")) && ((e = $(t).DataTable({
                                info: !1,
                                order: [],
                                pageLength: 10,
                                columnDefs: [{
                                    orderable: !1,
                                    targets: 0
                                }]
                            })).on("draw", (function() {
                                n()
                            })), document.querySelector('[data-filter="search"]')
                            .addEventListener("keyup", (function(t) {
                                e.search(t.target.value).draw()
                            })), n())
                    }
                }
            }();
            KTUtil.onDOMContentLoaded((function() {
                Agency.init();
            }));
        </script>
    @endsection
</x-WebAdmin>
