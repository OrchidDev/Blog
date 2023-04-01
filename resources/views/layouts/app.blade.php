<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        @include('components.include.meta')
        @include('components.include.style')
    </head>
    <body>
        {{ $slot }}
        @include('components.include.javascript')
    </body>
</html>
