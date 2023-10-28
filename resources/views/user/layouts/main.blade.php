<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Tabbinjai</title>
    @include('user.layouts.partials.css')
</head>

<body>
    @include('user.layouts.partials.navbar')
    
    @yield('content')
    
    @include('user.layouts.partials.footer')

    @include('user.layouts.partials.js')
</body>

</html>
