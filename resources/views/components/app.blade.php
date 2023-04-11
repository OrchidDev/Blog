<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    @include('components.include.meta')
    <!-- Styles -->
    @include('components.include.style')
</head>
<body>
@include('home.navbar')
{{$slot}}
@include('home.footer')
@include('components.include.javascript')
</body>
</html>
