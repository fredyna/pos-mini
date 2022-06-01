@extends('templates.master-admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-titles">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12 align-self-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}" class="link"><i
                                    class="ri-home-3-line fs-5"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('user.index') }}" class="link">
                                Data User
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tambah Baru
                        </li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Tambah User Baru</h1>
            </div>
            <div
                class="
                col-lg-4 col-md-6
                d-none d-md-flex
                align-items-center
                justify-content-end
                ">
                <a href="{{ route('user.index') }}" class="btn btn-light d-flex align-items-center ms-2">
                    <i class="ri-arrow-left-s-line me-1"></i>
                    Kembali
                </a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================= -->
    <!-- Container fluid  -->
    <!-- ============================================================= -->
    <div class="container-fluid">
        <!-- ============================================================= -->
        <!-- Start Page Content -->
        <!-- ============================================================= -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body border-bottom">
                        <h4 class="card-title">Form User Baru</h4>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('user.store') }}">
                        @csrf

                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="role" class="col-sm-3 text-end control-label col-form-label">Role User</label>
                                <div class="col-sm-9">
                                    <select name="role" id="role"
                                        class="form-control @if ($errors->has('role')) 'is-invalid' @endif" required>
                                        <option value="customer">CUSTOMER</option>
                                        <option value="admin">ADMIN</option>
                                    </select>

                                    @if ($errors->has('role'))
                                        <p class="text-danger">{{ $errors->first('role') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-3 text-end control-label col-form-label">Nama
                                    Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text"
                                        class="form-control @if ($errors->has('name')) 'is-invalid' @endif" id="name"
                                        name="name" placeholder="Nama lengkap" value="{{ old('name') }}" required>

                                    @if ($errors->has('name'))
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-3 text-end control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email"
                                        class="form-control @if ($errors->has('email')) 'is-invalid' @endif"
                                        id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="password"
                                    class="col-sm-3 text-end control-label col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password"
                                        class="form-control @if ($errors->has('password')) 'is-invalid' @endif"
                                        id="password" name="password" placeholder="*****" required>

                                    @if ($errors->has('password'))
                                        <p class="text-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="repeat_password" class="col-sm-3 text-end control-label col-form-label">Password
                                    Ulang</label>
                                <div class="col-sm-9">
                                    <input type="password"
                                        class="form-control @if ($errors->has('repeat_password')) 'is-invalid' @endif"
                                        id="repeat_password" name="repeat_password" placeholder="*****" required>

                                    @if ($errors->has('repeat_password'))
                                        <p class="text-danger">{{ $errors->first('repeat_password') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border-top">
                            <div class="text-end">
                                <button type="submit"
                                    class="
                                btn btn-info
                                rounded-pill
                                px-4
                                waves-effect waves-light
                                ">
                                    Simpan
                                </button>
                                <button type="reset"
                                    class="
                                btn btn-dark
                                rounded-pill
                                px-4
                                waves-effect waves-light
                                ">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ============================================================= -->
        <!-- End PAge Content -->
        <!-- ============================================================= -->
    </div>
    <!-- ============================================================= -->
    <!-- End Container fluid  -->
    <!-- ============================================================= -->
@endsection

@section('myjs')
    <script>
        $(function() {
            $("#menu-user").addClass('active');
        });
    </script>
@endsection
