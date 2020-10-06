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
        <livewire:styles />
        <livewire:scripts />
        <script src="{{ mix('js/app.js') }}"></script>
    </head>
    <body>
        
        <!-- Page loader (functionality is initialized in Template._uiHandlePageLoader()) -->
        {{-- <div id="page-loader" class="show"></div> --}}
        <!-- If #page-loader markup and also the "show" class is added, the loading screen will be enabled and auto hide once the page loads -->


        <!-- Start Page Container -->       
        @yield('page-container')
        <!-- END Page Container -->

        <!-- Start Page Container -->
        @include('components.plugins.js.core')
        <!-- Start Page Container -->

        <!-- Custom JS Page Plugins -->
        @yield('custom-js-page')
        <!-- Start Page Container -->
        
    </body>
</html>
