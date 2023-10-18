<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('APP_NAME') ?? 'Laravel')</title>

    @stack('before-styles')
    @include('public.includes.styles')
    @stack('after-styles')
</head>
<body>

    <div id="app" class="app">
        {{-- navbar --}}
        @include('public.includes.navbar')

        <main>
            @yield('content')
        </main>

        {{-- footer --}}
        @include('public.includes.footer')
    </div>

    @stack('before-scripts')
    @include('public.includes.scripts')
    @stack('after-scripts')
</body>
</html>