<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        @include('Home::section.meta')

        <title>@yield('title') | {{ config('app.name') }}</title>

        @include('Home::section.style')
    </head>
    <body>
        @yield('content')
        @include('Home::section.javascript')
    </body>
</html>
