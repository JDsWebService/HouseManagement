<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
    @yield('css')

</head>
<body>
    @include('partials.navbar')
    
    {{-- Sidebar --}}
    <div class="container-fluid">
        <div class="row">
            @include('partials.user.sidebar')

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">@yield('title')</h1>
                </div>
                    
                @include('partials.flash-messages')

                @yield('content')
                
                @include('partials.footer')
            </main>
        </div>
    </div>
    
    {{-- Javascript --}}
    <script src="{{ asset('js/user.js') }}"></script>
    <script src="https://kit.fontawesome.com/0d9c5a4db2.js"></script>
    @yield('javascript')
    
    {{-- Modals --}}
    @include('houses.modals.create')
    </body>
</html>
