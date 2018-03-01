<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel -{{$title or 'Boom'}}</title>
        @yield('container')
        @yield('stylesheets')
        @yield('scripts.header')
</head>
<body>

@include('layouts/partials/nav',['title'=>'salut'])
 @yield('content')

<footer>
    @yield('foot')
</footer>
@yield('scripts.footer')
</body>
</html>