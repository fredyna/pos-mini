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
    <title>{{ env('APP_NAME') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}" />
    <link href="{{ asset('vendor/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('vendor/datatables.net-bs4/css/responsive.dataTables.min.css') }}" />
    <link href="{{ asset('vendor/toastr/dist/build/toastr.min.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/modify.css') }}" rel="stylesheet" />
    @yield('mycss')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
