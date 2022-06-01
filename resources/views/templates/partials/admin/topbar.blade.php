<!-- ============================================================= -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================= -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ri-close-line ri-menu-2-line fs-6"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{ asset('images/logo-kreafit.png') }}" alt="homepage" class="dark-logo"
                        width="120" />
                    <!-- Light Logo icon -->
                    <img src="{{ asset('images/logo-kreafit.png') }}" alt="homepage" class="light-logo"
                        width="120" />
                </b>
                <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ri-more-line fs-6"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto">
                <!-- This is  -->
                <li class="nav-item">
                    <a class="nav-link sidebartoggler d-none d-md-block" href="javascript:void(0)"><i
                            data-feather="menu"></i></a>
                </li>
                <!-- search -->
                <li class="nav-item search-box">
                    <a class="nav-link" href="javascript:void(0)">
                        <i data-feather="search"></i>
                    </a>
                    <form class="app-search position-absolute">
                        <input type="text" class="form-control border-0" placeholder="Search &amp; enter" />
                        <a class="srh-btn"><i data-feather="x-circle" class="feather-sm text-muted"></i></a>
                    </form>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
                @include('templates.partials.admin.topbar_notification')
                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown profile-dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('admin/images/users/user.png') }}" alt="user" width="30"
                            class="profile-pic rounded-circle" />
                        <div class="d-none d-md-flex">
                            <span class="ms-2">Hi,
                                <span class="text-dark fw-bold">{{ Str::limit(Auth::user()->name, 15) }}</span></span>
                            <span>
                                <i data-feather="chevron-down" class="feather-sm"></i>
                            </span>
                        </div>
                    </a>
                    <div
                        class="
                    dropdown-menu dropdown-menu-end
                    user-dd
                    dropdown-menu-animate-up
                  ">
                        <ul class="list-style-none">

                            <li class="p-30 pt-0">
                                <div class="message-center message-body position-relative" style="height: 100px">
                                    <div class="mt-4">
                                        <a href="javascript:void(0)"
                                            class="text-dark
                                            fs-3
                                            font-weight-medium
                                            hover-primary
                                            ">
                                            Profil User <i class="me-2 mdi mdi-account-settings-variant"></i>
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            class="text-dark
                                                fs-3
                                                font-weight-medium
                                                hover-primary"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Keluar <i class="me-2 mdi mdi-exit-to-app"></i>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================= -->
<!-- End Topbar header -->
<!-- ============================================================= -->
