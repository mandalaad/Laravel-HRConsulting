<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Judul')</title>
    @include('includes.Style')
    @yield('Style')
</head>

<body>
    @include('includes.Navbar')
    @yield('Content')
    @include('includes.Footer')
    @include('includes.Script')

</body>

</html>
