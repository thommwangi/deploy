<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','Student AMS')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('thomas.inc.navbar')
        <div class="container">
            @include('thomas.inc.messages')
            @yield('content')
        </div>
        @include('thomas.inc.footer')
    </body>
</html>