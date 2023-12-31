<!--begin::Aside Toolbarl-->
<div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
    <!--begin::Aside user-->
    <!--begin::User-->
    <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
        <!--begin::Symbol-->
        <div class="symbol symbol-50px">
            <img src="{{ asset('images/blank.png') }}" alt="" />
        </div>
        <!--end::Symbol-->
        <!--begin::Wrapper-->
        <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
            <!--begin::Section-->
            <div class="d-flex">
                <!--begin::Info-->
                <div class="flex-grow-1 me-2">
                    <!--begin::Username-->
                    <a href="#" class="text-white text-hover-primary fs-6 fw-bold">{{ Auth::user()->name }}</a>
                    <!--end::Username-->
                    <!--begin::Description-->
                    <span class="text-gray-600 fw-semibold d-block fs-8 mb-1">{{ $role = auth()->user()->getRoleNames()[0]; }}</span>
                    <!--end::Description-->
                    <!--begin::Label-->
                    <div class="d-flex align-items-center text-success fs-9">
                        <span class="bullet bullet-dot bg-success me-1"></span>online
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Info-->
                <!--begin::User menu-->
                <div class="me-n2">
                    <!--begin::Action-->
                    <a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
                        <i class="ki-duotone ki-setting-2 text-muted fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="{{ asset('images/blank.png') }}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}
                                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">{{ $role = auth()->user()->getRoleNames()[0]; }}</span>
                                    </div>
                                    <a href="#"
                                        class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator--> 
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="{{ route('backend.logout') }}" class="menu-link px-5">Sign Out</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Action-->
                </div>
                <!--end::User menu-->
            </div>
            <!--end::Section-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::User-->
    <!--end::Aside user-->
</div>
<!--end::Aside Toolbarl-->
<!--begin::Aside menu-->
<div class="aside-menu flex-column-fluid">
    <!--begin::Aside Menu-->
    <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
        data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
        data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
        <!--begin::Menu-->
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
            id="#kt_aside_menu" data-kt-menu="true">

            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link {{ request()->is('backend/dashboard') ? 'active' : '' }}"
                    href="{{ route('backend.dashboard') }}">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-2">
                            <i class="fas fa-home fs-2"></i>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Dashboards</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            @role('super-admin')
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('backend/agency') ? 'active' : '' }}"
                        href="{{ route('backend.agency.index') }}">
                        <span class="menu-icon">
                            <i class="fas fa-building fs-2"></i>
                        </span>
                        <span class="menu-title">Agency</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('backend/agency-service') ? 'active' : '' }}"
                        href="{{ route('backend.agency-service.index') }}">
                        <span class="menu-icon">
                            <i class="fas fa-building fs-2"></i>
                        </span>
                        <span class="menu-title">Agency Service</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('backend/role') ? 'active' : '' }}"
                        href="{{ route('backend.role.index') }}">
                        <span class="menu-icon">
                            <i class="fas fa-user-tag fs-2"></i>
                        </span>
                        <span class="menu-title">Role</span>
                    </a>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('backend/user') ? 'active' : '' }}"
                        href="{{ route('backend.user.index') }}">
                        <span class="menu-icon">
                            <i class="fas fa-users fs-2"></i>
                        </span>
                        <span class="menu-title">User</span>
                    </a>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('backend/news') ? 'active' : '' }}"
                        href="{{ route('backend.news.index') }}">
                        <span class="menu-icon">
                            <i class="fas fa-newspaper fs-2"></i>
                        </span>
                        <span class="menu-title">News</span>
                    </a>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('backend/critic-suggestion') ? 'active' : '' }}"
                        href="{{ route('backend.critic-suggestion.index') }}">
                        <span class="menu-icon">
                            <i class="fas fa-comments fs-2"></i>
                        </span>
                        <span class="menu-title">Critic & Suggestion</span>
                    </a>
                </div>
                <!--end:Menu item-->
            @else
                @foreach ($agencyServices as $item)
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->is('backend/booking/' . $item->slug) ? 'active' : '' }}"
                            href="{{ route('backend.booking.index', $item->slug) }}">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <i class="fas fa-list fs-2"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">{{ $item->name }}</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                @endforeach
            @endrole
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside menu-->
