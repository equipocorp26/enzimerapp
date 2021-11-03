<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar closed-sidebar-mobile">
        @include('commons.navbar')
        <div class="app-main">
            @include('commons.sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div>
                                    @yield('title','')
                                </div>
                            </div>
                            <div class="page-title-actions">
                                @yield('actions')
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
                @include('commons.footer')
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('assets/scripts/main.js') }}"></script>
    <script src="{{ asset('js/plugins/all.min.js') }}"></script>
</body>

</html>