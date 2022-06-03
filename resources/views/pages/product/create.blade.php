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
                            <a href="{{ route('produk.index') }}" class="link">
                                Produk
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tambah Baru
                        </li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Tambah Produk Baru</h1>
            </div>
            <div
                class="
                col-lg-4 col-md-6
                d-none d-md-flex
                align-items-center
                justify-content-end
                ">
                <a href="{{ route('produk.index') }}" class="btn btn-light d-flex align-items-center ms-2">
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
                        <h4 class="card-title">Form Produk Baru</h4>
                    </div>
                    <form id="product-form" class="form-horizontal" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="input-group mb-3">
                                <input type="text" name="name" id="name"
                                    class="form-control @if ($errors->has('name')) 'is-invalid' @endif"
                                    placeholder="Masukan nama produk" value="{{ old('name') }}" autofocus="autofocus"
                                    required>

                                <span class="input-group-text"><i data-feather="file-text"
                                        class="feather-sm fill-white"></i></span>

                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <select name="product_category_id" id="product_category_id" class="form-select select2"
                                    required>
                                    <option value="">semua kategori</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == old('product_category_id') ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <span class="input-group-text"><i data-feather="list"
                                        class="feather-sm fill-white"></i></span>

                                @if ($errors->has('product_category_id'))
                                    <p class="text-danger">{{ $errors->first('product_category_id') }}</p>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <input type="number" name="price" id="price"
                                    class="form-control @if ($errors->has('price')) 'is-invalid' @endif"
                                    placeholder="Masukan harga" value="{{ old('price') }}" required>

                                <span class="input-group-text">Rp</span>

                                @if ($errors->has('price'))
                                    <p class="text-danger">{{ $errors->first('price') }}</p>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" name="thumbnail" id="thumbnail"
                                    class="form-control @if ($errors->has('thumbnail')) 'is-invalid' @endif"
                                    value="{{ old('thumbnail') }}" required>

                                <span class="input-group-text"><i data-feather="image"
                                        class="feather-sm fill-white"></i></span>

                                @if ($errors->has('thumbnail'))
                                    <p class="text-danger">{{ $errors->first('thumbnail') }}</p>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <textarea id="description" name="description" class="form-control @if ($errors->has('description')) 'is-invalid' @endif"
                                    placeholder="Deskripsi produk"></textarea>

                                @if ($errors->has('description'))
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="p-4 border-top">
                            <div class="progress mt-2 mb-2 d-none" style="height: 20px;">
                                <div class="progress-bar bg-success" style="width: 0%;" role="progressbar">Loading 0%</div>
                            </div>

                            <div id="button-form" class="text-end">
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

@section('mycss')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/dist/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/summernote/summernote-lite.min.css') }}" />
@endsection

@section('myjs')
    <script src="{{ asset('vendor/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/summernote/summernote-lite.min.js') }}"></script>
    <script src="{{ asset('vendor/axios/axios.min.js') }}"></script>
    <script>
        $(function() {
            $("#menu-product").addClass('active');
            $("#menu-product a").addClass('active');

            let select2 = $(".select2").select2();
            select2.data('select2').$selection.css('height', '35px');
            select2.data('select2').$selection.css('border', '1px solid #ecf0f2');

            $("#description").summernote({
                height: 350, // set editor height
                width: "100%",
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false, // set focus to editable area after initializing summernote
                placeholder: 'Masukan deskripsi produk...',
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontname', 'fontsize', 'height']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table', 'link']]
                ]
            });
        });

        $("form").on("submit", function(e) {
            e.preventDefault();
            saveProduct();
        });

        function saveProduct() {
            let url = `{{ route('produk.store') }}`;

            let progress = document.querySelector(".progress");
            let progress_bar = document.querySelector(".progress-bar");
            let button_form = document.querySelector("#button-form");
            button_form.classList.add("d-none");
            progress.classList.remove("d-none");

            const form = document.querySelector("#product-form");
            const formData = new FormData(form);

            const config = {
                onUploadProgress(progressEvent) {
                    let progress_result = (progressEvent.loaded / progressEvent.total) * 100;
                    progress_bar.style.width = `${progress_result}%`;
                    progress_bar.textContent = `Loading ${progress_result}%`;
                },
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            }

            axios.post(url, formData, config)
                .then(function(response) {
                    let data = response.data.data;
                    let meta = response.data.meta;

                    if (meta.status == 'error') {
                        toastr.error(`Error : ${meta.message}`);
                        return;
                    }

                    Swal.fire('Sukses', meta.message, 'success');

                    form.reset();
                    $(".select2").val('').trigger('change')
                    $('#description').summernote('code', '');
                })
                .catch(function(error) {
                    toastr.error(`Gagal simpan data. Error : ${error.message}`);
                })
                .finally(() => {
                    progress_bar.style.width = `0%`;
                    progress_bar.textContent = `Loading 0%`;
                    progress.classList.add("d-none");
                    button_form.classList.remove("d-none");
                });
        }
    </script>
@endsection
