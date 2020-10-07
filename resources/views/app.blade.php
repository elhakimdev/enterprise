<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        @include('components.__csrf_token')

        <title>@yield('page-tittle')</title>

        <!-- Start Page Container -->
        @include('components.__meta')  
        <!-- Start Page Container -->

        <!-- Start Livewire-->
        <livewire:styles />
        <livewire:scripts />
        <script src="{{ mix('js/app.js') }}"></script>
        <!-- End Livewire-->

    </head>
    <body>
        <!-- Start Page Container -->       
        @yield('page-container')
        <!-- End Page Container -->

        <!-- Start Page Plugins -->
        @include('components.plugins.js.core')
        <!-- End Page Plugins -->

        <!-- Custom JS Page Plugins -->
        @yield('custom-js-page')
        <!-- End Custom JS Page Plugin -->
    </body>
</html>
