<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Buat undangan pernikahanmu lebih eksklusif dan personal, nikmati kemudahan membagikan undangan hanya dalam 1 kali klik dengan alamat kreatifinvitation.com/namapasangan">
    <meta name="keywords" content="kreatif, invitation, undangan, digital, nikah, wedding, party, pernikahan">
    <meta name="author" content="Fredy Nur Apriyanto">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kreatif Invitation</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-kreafit-self.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') . '?v=0.1' }}">
</head>

<body>
    <section class="h-100 w-100">
        <div class="container-fluid mx-auto p-0  position-relative header-2-3">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a href="#">
                    <img id="logo-navbar" style="margin-right:2rem" src="{{ asset('images/logo-kreafit.png') }}"
                        alt="Logo" height="60">
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal"
                    data-bs-target="#targetModal-item">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
                    aria-labelledby="targetModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content border-0">
                            <div class="modal-header border-0" style="padding:	2rem; padding-bottom: 0;">
                                <a class="modal-title" id="targetModalLabel">
                                    <img style="margin-top:0.5rem" src="{{ asset('images/logo-kreafit.png') }}"
                                        alt="Logo" height="40">
                                </a>
                                <button type="button" class="close btn-close text-white" data-bs-dismiss="modal"
                                    aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body" style="padding:	2rem; padding-top: 0; padding-bottom: 0;">
                                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Produk</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Fitur</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Benefit</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Price List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Template Undangan</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-footer border-0 col-12" style="padding:	2rem; padding-top: 0.75rem">
                                <button class="btn btn-fill full-width border-0 text-white" onclick="sendWA();">Hubungi
                                    Kami</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fitur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Benefit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Price List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Template Undangan</a>
                        </li>
                    </ul>
                    <div class="gap-3">
                        <a id="btn-cart" href="javascript:void(0)" class="btn position-relative">
                            <img src="{{ asset('icons/cart.svg') }}" alt="Cart">
                            <span class="position-absolute translate-middle badge rounded-pill bg-warning">
                                0
                                <span class="visually-hidden">count cart</span>
                            </span>
                        </a>

                        <a href="{{ route('login') }}" class="btn btn-fill text-white border-0">Masuk</a>
                    </div>
                </div>
            </nav>

            <div class="mx-auto d-flex flex-lg-row flex-column hero">
                <!-- Right Column -->
                <div class="d-md-none d-block right-column text-center d-flex justify-content-center pe-0 mb-4">
                    <img id="img-fluid" class="w-100 h-auto" src="{{ asset('images/hero.jpg') }}" alt="hero">
                </div>

                <!-- Left Column -->
                <div
                    class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                    <h1 class="title-text-big">Platform Undangan<br class="d-none d-md-block" />
                        Pernikahan Digital Eksklusif
                    </h1>
                    <p class="text-caption">Bikin undangan pernikahanmu lebih eksklusif dan personal, nikmati
                        kemudahan membagikan undangan hanya dalam 1 kali klik dengan alamat
                        <b>kreatifinvitation.com/namapasangan</b>
                    </p>
                    <div
                        class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3 mt-2">
                        <button class="btn d-inline-flex mb-md-0 btn-fill text-white border-0">Buat Undangan</button>
                        <button class="btn d-inline-flex mb-md-0 btn-fill-outline">Lihat Price List</button>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="d-none d-md-block right-column text-center d-flex justify-content-center pe-0">
                    <img id="img-fluid" class="w-100 h-auto" src="{{ asset('images/hero.jpg') }}" alt="hero">
                </div>

            </div>
        </div>
    </section>

    <section id="section-featured" class="h-100 w-100">
        <div class="content-2-1 container-fluid mx-auto  position-relative">
            <div class="row">
                <div class="col-lg-4 mb-md-5 mb-2">
                    <h3 class="text-title mt-4">Keunggulan Undangan Digital di Kreatif Invitation</h3>
                    <p class="text-caption">
                        Kreatif Invitation membantu pasangan<br />untuk membuat undangan digital<br />dengan mudah.
                    </p>
                </div>
                <div class="col-lg-8 mb-md-5 mb-1">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="row">
                                    <div class="col-3 p-1">
                                        <img src="{{ asset('icons/icon_express.png') }}"
                                            class="img-fluid d-block mx-auto" alt="Proses Mudah">
                                    </div>
                                    <div class="col-9">
                                        <h5 class="card-title">Proses Mudah & Cepat</h5>
                                        <p class="card-caption">Hanya dalam waktu 5-10 menit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="row">
                                    <div class="col-3 p-1">
                                        <img src="{{ asset('icons/icon_paperless.png') }}"
                                            class="img-fluid d-block mx-auto" alt="Paperless">
                                    </div>
                                    <div class="col-9">
                                        <h5 class="card-title">Paperless</h5>
                                        <p class="card-caption">Mengurangi sampah kertas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="row">
                                    <div class="col-3 p-1">
                                        <img src="{{ asset('icons/icon_unlimited.png') }}"
                                            class="img-fluid d-block mx-auto" alt="Unlimited">
                                    </div>
                                    <div class="col-9">
                                        <h5 class="card-title">Unlimited Revisi</h5>
                                        <p class="card-caption">Bebas Revisi konten undangan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="row">
                                    <div class="col-3 p-1">
                                        <img src="{{ asset('icons/icon_template.png') }}"
                                            class="img-fluid d-block mx-auto" alt="Free Theme">
                                    </div>
                                    <div class="col-9">
                                        <h5 class="card-title">Desain Tema Gratis</h5>
                                        <p class="card-caption">Berbagai desain tema eksklusif</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-feature" class="h-100 w-100 mb-5">
        <div class="content-2-1 container-fluid mx-auto  position-relative">
            <div class="d-flex flex-column text-center w-100" style="margin-bottom: 3rem">
                <h1 class="text-title">Platform Undangan Digital dengan Fitur Terlengkap</h1>
                <p class="text-caption mx-auto">
                    Menjadikan alasan mengapa harus memilih kreatifinvitation.com
                </p>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 rounded-3">
                    <img class="img-fluid" src="{{ asset('images/hero.jpg') }}" alt="Placeholder">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="row">
                            <div class="col-3 p-1">
                                <img src="{{ asset('icons/icon_express.png') }}" class="img-fluid d-block mx-auto"
                                    alt="Proses Mudah">
                            </div>
                            <div class="col-9">
                                <h5 class="card-title">Smart Dashboard</h5>
                                <p class="card-caption">Memudahkan untuk mengatur undangan kamu sesuka hati</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="row">
                            <div class="col-3 p-1">
                                <img src="{{ asset('icons/icon_express.png') }}" class="img-fluid d-block mx-auto"
                                    alt="Proses Mudah">
                            </div>
                            <div class="col-9">
                                <h5 class="card-title">Kirim Undangan Cepat</h5>
                                <p class="card-caption">Sekali klik untuk kirim undangan ke semua tamu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="row">
                            <div class="col-3 p-1">
                                <img src="{{ asset('icons/icon_express.png') }}" class="img-fluid d-block mx-auto"
                                    alt="Proses Mudah">
                            </div>
                            <div class="col-9">
                                <h5 class="card-title">Check-In & RSVP Tamu</h5>
                                <p class="card-caption">Konfirmasi kehadiran dan Scan QR tamu undangan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="row">
                            <div class="col-3 p-1">
                                <img src="{{ asset('icons/icon_express.png') }}" class="img-fluid d-block mx-auto"
                                    alt="Proses Mudah">
                            </div>
                            <div class="col-9">
                                <h5 class="card-title">Background Musik</h5>
                                <p class="card-caption">Menambah eksklusifitas dengan musik di undangan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="row">
                            <div class="col-3 p-1">
                                <img src="{{ asset('icons/icon_express.png') }}" class="img-fluid d-block mx-auto"
                                    alt="Proses Mudah">
                            </div>
                            <div class="col-9">
                                <h5 class="card-title">Amplop Kado Digital</h5>
                                <p class="card-caption">Dapatkan kado digital dari tamu ke rekening pasangan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="row">
                            <div class="col-3 p-1">
                                <img src="{{ asset('icons/icon_express.png') }}" class="img-fluid d-block mx-auto"
                                    alt="Proses Mudah">
                            </div>
                            <div class="col-9">
                                <h5 class="card-title">Tampilan Responsive</h5>
                                <p class="card-caption">Tampilan Undangan mendukung di semua device.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-template" class="h-100 w-100">
        <div class="content-2-1 container-fluid mx-auto  position-relative">
            <div class="d-flex flex-column text-center w-100" style="margin-bottom: 3rem">
                <h1 class="text-title">Berbagai Template Undangan Siap Pakai</h1>
                <p class="text-caption mx-auto">
                    Template Basic, Special dan Premium
                </p>
            </div>
            <div class="scrolling-wrapper">
                <div class="card-template">
                    <a class="component-template d-block" href="#">
                        <div class="template-thumbnail">
                            <img loading="lazy" class="template-image"
                                src="{{ asset('images/templates/template_1.png') }}" alt="Product Image">
                        </div>
                        <div class="template-title">
                            Nama Tema Undangan
                        </div>
                        <div class="template-tipe">
                            <img src="{{ asset('icons/basic.svg') }}" alt="Basic" width="24px">
                            Basic
                        </div>
                    </a>
                </div>
                <div class="card-template">
                    <a class="component-template d-block" href="#">
                        <div class="template-thumbnail">
                            <img loading="lazy" class="template-image"
                                src="{{ asset('images/templates/template_1.png') }}" alt="Product Image">
                        </div>
                        <div class="template-title">
                            Nama Tema Undangan
                        </div>
                        <div class="template-tipe">
                            <img src="{{ asset('icons/basic.sv') }}g" alt="Basic" width="24px">
                            Basic
                        </div>
                    </a>
                </div>
                <div class="card-template">
                    <a class="component-template d-block" href="#">
                        <div class="template-thumbnail">
                            <img loading="lazy" class="template-image"
                                src="{{ asset('images/templates/template_1.png') }}" alt="Product Image">
                        </div>
                        <div class="template-title">
                            Nama Tema Undangan
                        </div>
                        <div class="template-tipe">
                            <img src="{{ asset('icons/special.svg') }}" alt="Basic" width="24px">
                            Special
                        </div>
                    </a>
                </div>
                <div class="card-template">
                    <a class="component-template d-block" href="#">
                        <div class="template-thumbnail">
                            <img loading="lazy" class="template-image"
                                src="{{ asset('images/templates/template_1.png') }}" alt="Product Image">
                        </div>
                        <div class="template-title">
                            Nama Tema Undangan
                        </div>
                        <div class="template-tipe">
                            <img src="{{ asset('icons/premium.svg') }}" alt="Basic" width="24px">
                            Premium
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <button class="btn d-inline-flex mb-md-0 btn-fill text-white border-0">Lihat Semua Tema</button>
                </div>
            </div>
        </div>
    </section>

    <section id="section-pricelist" class="h-100 w-100">
        <div class="content-2-1 container-fluid mx-auto  position-relative">
            <div class="d-flex flex-column text-center w-100" style="margin-bottom: 3rem">
                <h1 class="text-title">Price List Undangan Digital</h1>
            </div>

            <div class="row mb-3">
                <div class="col-12 mb-3">
                    <div class="card-price text-center">
                        <h6 class="price-title">Paket Curtina</h6>
                        <p class="price-text">Rp99K</p>
                        <button class="btn d-inline-flex mb-md-0 btn-fill-outline">Pilih Paket</button>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="card-price text-center">
                        <h6 class="price-title">Paket Harsa</h6>
                        <p class="price-text">Rp149K</p>
                        <button class="btn d-inline-flex mb-md-0 btn-fill-outline">Pilih Paket</button>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="card-price text-center">
                        <div class="penawaran-terbaik" style=""></div>
                        <h6 class="price-title">Paket Litani</h6>
                        <p class="price-text">Rp249K</p>
                        <button class="btn d-inline-flex mb-md-0 btn-fill-outline">Pilih Paket</button>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="card-price text-center">
                        <h6 class="price-title">Paket Amerta</h6>
                        <p class="price-text">Rp399K</p>
                        <button class="btn d-inline-flex mb-md-0 btn-fill-outline">Pilih Paket</button>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <button class="btn d-inline-flex mb-md-0 btn-fill text-white border-0">Lihat Lebih Detail</button>
                </div>
            </div>
        </div>
    </section>

    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #141432">
        <div class="footer-2-3 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif">
            <div class="list-footer">
                <div class="row gap-md-0 gap-3">
                    <div class="col-lg-3 col-md-6">
                        <div class="">
                            <div class="list-space">
                                <img src="{{ asset('images/logo-self.png') }}" alt="Logo" width="44px" />
                            </div>
                            <nav class="list-unstyled">
                                <li class="list-space">
                                    <a href="javascript:void(0)" class="list-menu">
                                        Jl. Dr. Cipto Mangunkusumo No.462, Tegal, Indonesia
                                    </a>
                                </li>
                                <li class="list-space">
                                    <a href="javascript:void(0)" class="list-menu">
                                        (+62) 898 9116 079
                                    </a>
                                </li>
                                <li class="list-space">
                                    <a href="javascript:void(0)" class="list-menu">
                                        creativespacebox@gmail.com
                                    </a>
                                </li>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h2 class="footer-text-title text-white">Products</h2>
                        <nav class="list-unstyled">
                            <li class="list-space">
                                <a href="javascript:void(0)" class="list-menu">UI/UX</a>
                            </li>
                            <li class="list-space">
                                <a href="javascript:void(0)" class="list-menu">Icon/Illustration</a>
                            </li>
                            <li class="list-space">
                                <a href="javascript:void(0)" class="list-menu">Branding</a>
                            </li>
                            <li class="list-space">
                                <a href="javascript:void(0)" class="list-menu">Development</a>
                            </li>
                            <li class="list-space">
                                <a href="javascript:void(0)" class="list-menu">Kretif Invitation</a>
                            </li>
                            <li class="list-space">
                                <a href="javascript:void(0)" class="list-menu">Photography</a>
                            </li>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h2 class="footer-text-title text-white">Company</h2>
                        <nav class="list-unstyled">
                            <li class="list-space">
                                <a href="javascript:void(0)" class="list-menu">About</a>
                            </li>
                            <li class="list-space">
                                <a href="javascript:void(0)" class="list-menu">Contact</a>
                            </li>
                            <li class="list-space">
                                <a href="javascript:void(0)" class="list-menu">Careers</a>
                            </li>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h2 class="footer-text-title text-white">Community</h2>
                        <nav class="list-unstyled">
                            <li class="list-space">
                                <a href="javascript:void(0)" class="list-menu">Testimonials</a>
                            </li>
                            <li class="list-space">
                                <a href="javascript:void(0)" class="list-menu">Webinar</a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="border-color info-footer">
                <div class="">
                    <hr class="hr" />
                </div>
                <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4">
                    <div class="d-flex title-font font-medium align-items-center gap-4">
                        <a href="javascript:void(0)">
                            <svg class="social-media-c social-media-left" width="30" height="30" viewBox="0 0 30 30"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="15" fill="#707092" />
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667Z"
                                        fill="#141432" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="javascript:void(0)">
                            <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="15" fill="#707092" />
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z"
                                        fill="#141432" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/creativespacebox/" target="_blank">
                            <svg class="social-media-p" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z"
                                    fill="#707092" />
                                <path
                                    d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z"
                                    fill="#707092" />
                                <path
                                    d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511Z"
                                    fill="#707092" />
                            </svg>
                        </a>
                        <a href="javascript:void(0)">
                            <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="15" fill="#707092" />
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M17.9027 22.4467C17.916 22.4427 17.9287 22.4373 17.942 22.4327C26.0853 19.1973 23.8327 7 15 7C10.5673 7 7 10.6133 7 15C7 20.5513 12.6227 24.5127 17.9027 22.4467ZM10.5207 20.3727C11.0887 19.418 12.9267 16.7247 16.064 15.7953C16.72 17.468 17.18 19.4193 17.2253 21.632C14.848 22.4313 12.3407 21.8933 10.5207 20.3727ZM18.2087 21.2147C18.1213 19.0887 17.6873 17.2033 17.0687 15.57C18.4567 15.3533 20.0633 15.498 21.8853 16.228C21.498 18.402 20.108 20.2293 18.2087 21.2147ZM21.99 15.194C19.9833 14.44 18.2147 14.346 16.684 14.638C16.4473 14.1047 16.1987 13.592 15.9353 13.12C18.284 12.182 19.672 11.0387 20.2933 10.4333C21.39 11.7027 22.0413 13.346 21.99 15.194ZM19.5833 9.72133C19.018 10.2593 17.6867 11.346 15.41 12.2347C14.294 10.4693 13.1007 9.224 12.3447 8.52667C14.7633 7.53067 17.5527 7.956 19.5833 9.72133ZM11.3887 9.01533C11.9593 9.51733 13.212 10.7227 14.4207 12.5867C12.7607 13.1213 10.6793 13.514 8.148 13.5693C8.55067 11.64 9.75333 10.0053 11.3887 9.01533ZM8.02133 14.5733C10.8547 14.5273 13.148 14.08 14.9607 13.4747C15.2113 13.914 15.4493 14.3927 15.678 14.89C12.5213 15.8953 10.5487 18.4907 9.79333 19.6627C8.57467 18.3027 7.90267 16.528 8.02133 14.5733Z"
                                        fill="#141432" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                    <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center gap-4">
                        <a href="javascript:void(0)" class="footer-link" style="text-decoration: none">Terms of
                            Service</a>
                        <span>|</span>
                        <a href="javascript:void(0)" class="footer-link" style="text-decoration: none">Privacy
                            Policy</a>
                        <span>|</span>
                        <a href="javascript:void(0)" class="footer-link" style="text-decoration: none">Licenses</a>
                    </nav>
                    <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
                        <p style="margin: 0">Copyright © 2022. All rights reserved</p>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
        function sendWA() {
            let no_wa = 628989116079;
            let url = "https://wa.me";
            let message = 'Hai, Creative Space Box. Saya [Nama Anda] mau konsultasi mengenai [Isi keperluan konsultasi]';
            let url_send = `${url}/${no_wa}?text=${message}`;

            window.open(url_send, "_blank");
        }
    </script>
</body>

</html>