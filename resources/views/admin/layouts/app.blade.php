<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('APP_NAME') ?? 'Laravel')</title>

    @stack('before-styles')
    @include('admin.includes.styles')
    @stack('after-styles')

</head>
<body>

    <div id="app" class="d-flex">
        <!-- Sidebar-->
        @include('admin.includes.sidebar')

        <div id="page-content-wrapper">
            <!-- Top navigation-->
            @include('admin.includes.navbar')

            {{-- content --}}
            <main class="container px-md-5">
                @yield('content')
            </main>
        </div>
    </div>

    @stack('before-scripts')
    @include('admin.includes.scripts')
    @stack('after-scripts')

    @stack('modal')
</body>
</html>