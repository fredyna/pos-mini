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
                            <a href="{{ route('kategori-produk.index') }}" class="link">
                                Kategori Produk
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tambah Baru
                        </li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Tambah Kategori Produk Baru</h1>
            </div>
            <div
                class="
                col-lg-4 col-md-6
                d-none d-md-flex
                align-items-center
                justify-content-end
                ">
                <a href="{{ route('kategori-produk.index') }}" class="btn btn-light d-flex align-items-center ms-2">
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
                        <h4 class="card-title">Form Kategori Baru</h4>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('kategori-produk.store') }}">
                        @csrf

                        <div class="card-body">
                            <div class="input-group mb-3">
                                <input type="text" name="name"
                                    class="form-control @if ($errors->has('name')) 'is-invalid' @endif"
                                    placeholder="Masukan nama kategori..." value="{{ old('name') }}" required>

                                <span class="input-group-text"><i data-feather="file-text"
                                        class="feather-sm fill-white"></i></span>

                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
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
            $("#menu-product-category").addClass('active');
            $("#menu-product-category a").addClass('active');
        });
    </script>
@endsection
