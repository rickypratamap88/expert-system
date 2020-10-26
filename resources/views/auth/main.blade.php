<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link href="{{ asset('assets') }}/main.css" rel="stylesheet">
</head>
<body class="bg-primary">
    @yield('content')

    <script type="text/javascript" src="{{ asset('assets/assets') }}/scripts/main.js"></script>
</body>
</html>