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
                        <h5 class="text-bold-700">{{ Auth::user()->name }}</h5>
                        <p class="text-gray">{{ Auth::user()->getRoleNames()[0] }}</p>
                    </div>
                </li>
                @role('admin')
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard') }}"
                            aria-expanded="false"><i data-feather="pie-chart"></i><span
                                class="hide-menu">Dashboard</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a id="menu-user" class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('user.index') }}" aria-expanded="false"><i data-feather="users"></i><span
                                class="hide-menu">Data User</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a id="menu-templates" class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('invitation-templates.index') }}" aria-expanded="false"><i
                                data-feather="layout"></i><span class="hide-menu">Template Undangan</span></a>
                    </li>
                    <li id="menu-master" class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="database"></i><span class="hide-menu">Data
                                Master</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li id="menu-master-role" class="sidebar-item">
                                <a href="{{ route('role.index') }}" class="sidebar-link"><i
                                        class="ri-arrow-right-s-line"></i><span class="hide-menu"> Role</span></a>
                            </li>
                            <li id="menu-master-permission" class="sidebar-item">
                                <a href="{{ route('permission.index') }}" class="sidebar-link"><i
                                        class="ri-arrow-right-s-line"></i><span class="hide-menu">
                                        Permission</span></a>
                            </li>
                            <li id="menu-master-role-permission" class="sidebar-item">
                                <a href="{{ route('role-permission.index') }}" class="sidebar-link"><i
                                        class="ri-arrow-right-s-line"></i><span class="hide-menu"> Role
                                        Permission</span></a>
                            </li>
                            <li id="menu-master-paket-undangan" class="sidebar-item">
                                <a href="{{ route('invitation-packet.index') }}" class="sidebar-link"><i
                                        class="ri-arrow-right-s-line"></i><span class="hide-menu"> Paket
                                        Undangan</span></a>
                            </li>
                        </ul>
                    </li>
                @endrole
                @role('member')
                    <li id="menu-project" class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('project.index') }}"
                            aria-expanded="false"><i data-feather="briefcase"></i><span class="hide-menu">Project
                                Saya</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i
                                data-feather="list"></i><span class="hide-menu">Pesanan Saya</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i
                                data-feather="headphones"></i><span class="hide-menu">Panduan Pengguna</span></a>
                    </li>
                @endrole
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('user-profile') }}"
                        aria-expanded="false"><i data-feather="user-check"></i><span class="hide-menu">Profil
                            Saya</span></a>
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
