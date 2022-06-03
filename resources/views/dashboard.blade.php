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
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Dashboard</h1>
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
            <div class="col-lg-12">
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <span
                                class="
                        btn btn-xl btn-light-info
                        text-info
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      ">
                                <i data-feather="grid"></i>
                            </span>
                            <h3 class="mt-3 pt-1 mb-0">
                                {{ $product }}
                            </h3>
                            <h6 class="text-muted mb-0 fw-normal">Data Produk</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <span
                                class="
                        btn btn-xl btn-light-warning
                        text-warning
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      ">
                                <i data-feather="tag"></i>
                            </span>
                            <h3 class="mt-3 pt-1 mb-0">
                                {{ $product_category }}
                            </h3>
                            <h6 class="text-muted mb-0 fw-normal">Kategori Produk</h6>
                        </div>
                    </div>
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
