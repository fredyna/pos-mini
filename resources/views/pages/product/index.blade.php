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
                            Produk
                        </li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Data Produk</h1>
            </div>
            <div
                class="
            col-lg-4 col-md-6
            d-none d-md-flex
            align-items-center
            justify-content-end
            ">
                <a href="{{ route('produk.create') }}" class="btn btn-info d-flex align-items-center ms-2">
                    <i class="ri-add-line me-1"></i>
                    Tambah Baru
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

        <!-- filter -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="d-flex border-bottom title-part-padding align-items-center">
                        <h4 class="card-title mb-0">Pencarian</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('produk.index') }}" method="GET">
                            <div class="mb-3 row">
                                <label for="category" class="col-sm-3 control-label col-form-label">Kategori Produk</label>
                                <div class="col-sm-9">
                                    <select name="category" id="category" class="form-select select2">
                                        <option value="semua">semua kategori</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->id == $category ? 'selected' : '' }}>{{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-info btn-sm px-3"><i class="fa fa-search"></i>
                                        cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end filter -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table-data" class="table customize-table mb-0 v-middle text-nowrap" width="100%">
                                <thead class="bg-info text-white">
                                    <tr>
                                        <th class="border-bottom border-top" width="10%">#</th>
                                        <th class="border-bottom border-top">NAMA PRODUK</th>
                                        <th class="border-bottom border-top">KATEGORI</th>
                                        <th class="border-bottom border-top">HARGA</th>
                                        <th class="border-bottom border-top">THUMBNAIL</th>
                                        <th class="border-bottom border-top text-center" width="10%">AKSI</th>
                                    </tr>
                                </thead>
                            </table>
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

@section('mycss')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/dist/css/select2.min.css') }}" />
@endsection

@section('myjs')
    <script src="{{ asset('vendor/select2/dist/js/select2.min.js') }}"></script>
    <script>
        $(function() {
            $("#menu-product").addClass('active');
            $("#menu-product a").addClass('active');
            let select2 = $(".select2").select2();
            select2.data('select2').$selection.css('height', '35px');
            select2.data('select2').$selection.css('border', '1px solid #ecf0f2');
            $("#tabel-data").DataTable({
                responsive: true,
            });
        });

        let category = $("#category").val();
        let product_json = `{{ route('produk.json') }}?category=${category}`;

        var table_data = $('#table-data').DataTable({
            responsive: true,
            scrollX: true,
            processing: true,
            serverSide: true,
            ajax: product_json,
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'category_name',
                    name: 'category_name'
                },
                {
                    data: 'price',
                    name: 'price',
                    class: 'text-end'
                },
                {
                    data: 'thumbnail',
                    name: 'thumbnail',
                    class: 'text-center'
                },
                {
                    data: 'action',
                    name: 'action',
                    class: 'text-center',
                    orderable: false,
                    searchable: false
                },
            ],
            "order": [
                [1, "asc"]
            ],
            "lengthMenu": [
                [10, 50, -1],
                [10, 50, "All"]
            ]
        });

        function hapusData(id) {
            Swal.fire({
                title: "Yakin mau dihapus?",
                text: "Data akan segera dihapus setelah dilanjutkan!",
                type: "warning",
                icon: "warning",
                showCancelButton: true,
                cancelButtonText: "Batalkan",
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus!",
            }).then((result) => {
                if (result.value) {
                    $("#data-" + id).submit();
                }
            });
        }
    </script>
@endsection
