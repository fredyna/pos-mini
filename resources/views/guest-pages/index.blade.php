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

        footer {
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

        <div class="row">
            <div class="col-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.
                        </p>
                        <a href="#" class="btn btn-success btn-sm px-3 mt-4">Beli</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="text-center mt-5 p-3">
        <p><b>2019 &copy; PT Majoo Teknologi Indonesia</b></p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
