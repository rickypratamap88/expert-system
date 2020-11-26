<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ asset('assets') }}/main.css" rel="stylesheet">

    @stack('css')
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        
        {{-- header --}}
        @include('layouts.backend.partials.header')  
        
        <div class="app-main">

            {{-- sidebar --}}
            @include('layouts.backend.partials.sidebar')  
            
            <div class="app-main__outer">
                
                @yield('content')

                {{-- footer --}}
                @include('layouts.backend.partials.footer')  

            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('assets/assets') }}/scripts/main.js"></script>
    @stack('js')
    @include('sweetalert::alert')
</body>
</html>
