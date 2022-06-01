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
                <a href="index.html" class="link"
                    ><i class="ri-home-3-line fs-5"></i
                ></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                Starter Page
                </li>
            </ol>
            </nav>
            <h1 class="mb-0 fw-bold">Starter Page</h1>
        </div>
        <div
            class="
            col-lg-4 col-md-6
            d-none d-md-flex
            align-items-center
            justify-content-end
            "
        >
            <a
            href="javascript:void(0)"
            class="btn btn-info d-flex align-items-center ms-2"
            >
            <i class="ri-add-line me-1"></i>
            Add New
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
                    <div class="card-body">
                        This is some text within a card block.
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
