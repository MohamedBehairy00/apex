<!DOCTYPE html>

<head>
    @include('layouts.partials.head')
</head>

<body style="background-color: white">

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')

    @include('layouts.partials.footer-scripts')

</body>

</html>
