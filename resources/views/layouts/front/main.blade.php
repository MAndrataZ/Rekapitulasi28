<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rekapitulasi Nilai SMPN 28</title>
        @include('layouts.front.style')
        @stack('style')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        @include('layouts.front.navbar')

        @include('layouts.front.sidebar')

        <div class="content-wrapper">
            @yield('container')
        </div>
        
        @include('layouts.front.footer')

        @include('layouts.front.script')
        @stack('script')
    </body>
</html>