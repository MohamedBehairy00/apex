<!doctype html>

<html lang="en">

<head>
    @include('web.partials.head')
</head>

<body>

    @include('web.partials.header')

    @yield('content')

    @include('web.partials.footer')

    @include('web.partials.footer-scripts')

</body>

</html>
