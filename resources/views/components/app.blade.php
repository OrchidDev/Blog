<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    @include('components.include.meta')
    <!-- Styles -->
    @include('components.include.style')
</head>
<body class="antialiased">
    @include('components.include.navbar')
    {{$slot}}
    @include('components.include.javascript')
</body>
</html>
