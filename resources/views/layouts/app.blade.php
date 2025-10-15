<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('util.seo')
    <title>
        @if (!empty($title))
            {{ $title }} | Romar Construction Services
        @else
            The official website of Romar Construction Services
        @endif
    </title>
    @include('util.favicons')
    @include('util.fonts')
    @yield('styles')
    @stack('styles')
    @include('util.styles')
    @yield('scripts')
    @stack('scripts')
    @include('util.scripts')
    <noscript>
        <meta http-equiv="refresh" content="0;url={{ url('/require') }}">
    </noscript>
</head>
<body>
    @include('partials.header')
    
    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>