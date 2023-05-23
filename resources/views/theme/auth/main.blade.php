<!doctype html>
<html lang="en" data-layout="twocolumn" data-sidebar="light" data-sidebar-size="lg">
@include('theme.auth.head')

<body>

    <div class="auth-page-wrapper pt-5">

        <!-- auth page content -->
        <div class="auth-page-content">
            {{ $slot }}
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        @include('theme.auth.footer')
        <!-- end Footer -->
    </div>
    @include('theme.auth.js')
    <!-- end auth-page-wrapper -->
</body>

</html>
