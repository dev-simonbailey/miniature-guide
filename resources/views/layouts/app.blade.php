<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include("global.head")
<body style='background-color:white'>
    <div id="app">
        @include("global.mega_menu")
    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>
</html>
