<!-- ============================================================= -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================= -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <div id="user-profile">
                        <img class="img-fluid mb-3" src="{{ asset('admin/images/users/user.png') }}" width="60"
                            alt="User">
                        <h5 class="text-bold-700 mb-4">{{ ucwords(strtolower(Auth::user()->name)) }}</h5>
                    </div>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard') }}"
                        aria-expanded="false"><i data-feather="pie-chart"></i><span
                            class="hide-menu">Dashboard</span></a>
                </li>
                <li class="sidebar-item">
                    <a id="menu-product" class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                        aria-expanded="false"><i data-feather="grid"></i><span class="hide-menu">Data
                            Produk</span></a>
                </li>
                <li class="sidebar-item">
                    <a id="menu-product-category" class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('kategori-produk.index') }}" aria-expanded="false"><i
                            data-feather="tag"></i><span class="hide-menu">Kategori
                            Produk</span></a>
                </li>
                <li class="sidebar-item">
                    <a id="menu-logout" class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="javascript:void(0)" aria-expanded="false" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i
                            data-feather="log-out"></i><span class="hide-menu">Keluar</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->

</aside>
<!-- ============================================================= -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================= -->
