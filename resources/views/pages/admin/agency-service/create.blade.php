<x-WebAdmin title="Membuat Layanan Instansi">
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
                    <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Layanan Instansi</h1>
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
                        <li class="breadcrumb-item text-dark">Membuat Layanan Instansi</li>
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
                <form id="form_input" class="form d-flex flex-column flex-lg-row"
                    data-kt-redirect="{{ route('backend.agency-service.index') }}"
                    action="{{ route('backend.agency-service.store') }}" method="POST">
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Utama</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Pilih Instansi</label>
                                    <!--end::Label-->
                                    <!--begin::Select2-->
                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                        data-placeholder="Select an option" name="agency_id">
                                        <option></option>
                                        @foreach ($agencies as $agency)
                                            <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                                        @endforeach
                                    </select>
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">
                                        Layanan Instansi yang akan ditampilkan di halaman utama.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Nama Layanan Instansi</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="name" class="form-control mb-2"
                                        placeholder="Nama Layanan Instansi" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">
                                        Layanan Instansi yang akan ditampilkan di halaman utama.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Deskripsi</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea name="description" class="form-control mb-2" rows="3" placeholder="Deskripsi"></textarea>
                                    <!--end::Input-->
                                    <!--end::Description-->
                                    <div class="text-muted fs-7">
                                        Deskripsi yang akan ditampilkan di halaman utama.
                                    </div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Status</label>
                                    <!--end::Label-->
                                    <!--begin::Select2-->
                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                        data-placeholder="Select an option" name="status">
                                        <option></option>
                                        <option value="publish" selected="selected">Published</option>
                                        <option value="unpublish">Unpublished</option>
                                    </select>
                                    <!--end::Select2-->
                                    <!--end::Description-->
                                    <div class="text-muted fs-7">
                                        Deskripsi yang akan ditampilkan di halaman utama.
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="javascript:void(0);" data-kt-element="cancel" class="btn btn-light me-3">
                                Cancel
                            </a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" class="btn btn-primary" data-kt-element="submit">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Main column-->
                </form>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
    <!--end::Content-->
    @section('custom_js')
        <script src="{{ asset('js/FormControls.js') }}"></script>
        <script>
            const formEl = $('#form_input');
            formEl.on('submit', function(e) {
                e.preventDefault();
                KTFormControls.onSubmitForm(formEl);
            });
            const btnCancelEl = formEl.find('[data-kt-element="cancel"]');
            btnCancelEl.on('click', function(e) {
                e.preventDefault();
                KTFormControls.onCancelForm(formEl);
            });
        </script>
    @endsection
</x-WebAdmin>
