<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Aplikasi wirausaha lengkap kelola bisnis jadi maju" />
    <meta name="keywords" content="wirausaha, bisnis, kasir online, marketplace" />
    <meta name="author" content="Fredy Nur Apriyanto">
    <meta name="robots" content="noindex,nofollow" />
    <title>Majoo Teknologi Indonesia</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <style>
        .title {
            font-weight: 700;
        }

        .card {
            border-radius: 10px;
            border: 0px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
        }

        footer {
            /* position: absolute;
            bottom: 0;
            left: 0; */
            width: 100%;
            border-top: 1px solid #000000;
        }

    </style>
</head>

<body>
    <nav class="navbar bg-dark text-white">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Majoo Teknologi Indonesia</span>
            <a href="{{ route('login') }}" class="btn btn-info">Masuk</a>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="title">Produk</h2>

        <div class="row mt-4">
            @forelse ($products as $item)
                <div class="col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img class="img-fluid" src="{{ asset('uploads/products/' . $item->thumbnail) }}"
                                alt="Product Image">
                            <h5 class="title mt-3"><strong>{{ $item->name }}</strong></h5>
                            <h5 class="mt-3">
                                <b><sup>Rp</sup>{{ number_format($item->price, 0, ',', '.') }}</b>
                            </h5>
                            <p class="card-text mt-4">{!! $item->description !!}</p>
                            <a href="#" class="btn btn-success btn-sm px-3 mt-4">Beli</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">Tidak ada data</p>
                </div>
            @endforelse
        </div>

    </div>

    <footer class="text-center mt-5 p-2">
        <p><b>2019 &copy; PT Majoo Teknologi Indonesia</b></p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
