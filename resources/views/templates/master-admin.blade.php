<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('templates.partials.admin.header')

<body>
    @include('templates.partials.admin.preloader')
    <!-- ============================================================= -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================= -->
    <div id="main-wrapper">
        @include('templates.partials.admin.topbar')
        @include('templates.partials.admin.sidebar')
        <!-- ============================================================= -->
        <!-- Page wrapper  -->
        <!-- ============================================================= -->
        <div class="page-wrapper">
            @yield('content')
            @include('templates.partials.admin.footer')
        </div>
        <!-- ============================================================= -->
        <!-- End Page wrapper  -->
        <!-- ============================================================= -->
    </div>
    <!-- ============================================================= -->
    <!-- End Wrapper -->
    <!-- ============================================================= -->
    @include('templates.partials.admin.script')
</body>

</html>
