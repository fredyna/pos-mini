<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Wujudkan ide bisnis anda bersama kami. Tim Creative Space Box yang bersemangat dalam membangun ide bisnis Anda.">
    <meta name="keywords" content="ui/ux, development, kreatif invitation, branding, icon/illustration, photography">
    <meta name="author" content="Fredy Nur Apriyanto">
    <meta name="robots" content="noindex,nofollow" />
    <title>{{ env('APP_NAME', 'APLIKASI') }}</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminpro/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo-kreafit.png') }}" />
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.min.css') }}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================= -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================= -->

        {{-- @include('templates.partials.admin.preloader') --}}

        <!-- ============================================================= -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================= -->
        <!-- ============================================================= -->
        <!-- Login box.scss -->
        <!-- ============================================================= -->
        <div class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
        "
            style="
            no-repeat center center;
            background-size: cover;
        ">
            <div class="auth-box p-4 bg-white rounded">
                <div id="loginform">
                    <div class="logo">
                        <h3 class="box-title mb-3">Sign In</h3>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" class="form-horizontal mt-3 form-material" id="loginform"
                                action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="">
                                        <input class="form-control" type="email" name="email" placeholder="Email"
                                            required />
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="">
                                        <input class="form-control" type="password" name="password"
                                            placeholder="Password" required />
                                    </div>
                                </div>

                                <div class="form-group text-center mt-4 mb-3">
                                    <div class="col-xs-12">
                                        <button
                                            class="
                          btn btn-primary
                          d-block
                          w-100
                          waves-effect waves-light
                        "
                                            type="submit">
                                            Masuk
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group text-center">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link text-center" href="{{ route('password.request') }}">
                                            {{ __('Lupa Password?') }}
                                        </a>
                                    @endif
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================= -->
        <!-- Login box.scss -->
        <!-- ============================================================= -->
    </div>
    <!-- ============================================================= -->
    <!-- All Required js -->
    <!-- ============================================================= -->
    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ============================================================= -->
    <!-- This page plugin js -->
    <!-- ============================================================= -->

    <script>
        $(".preloader").fadeOut();
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $("#to-recover").on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
</body>

</html>
