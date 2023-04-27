<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/fonts/fonts.css">
    <link rel="stylesheet" href="/plugins/slick/slick.css">

    <!-- Scripts -->
    @vite([
    'resources/sass/portal.scss',
    'resources/js/app.js'
    ])

    @livewireStyles

    @yield('styles')
    <title>Oops | @yield('title')</title>
</head>
<body>
<div class="page-preloader-wrap">
    <img src="/media/media_fixed/preloader.gif" alt="">
</div>

{{--<x-ui.modal/>--}}
<x-header/>
<div class="content-wrapper">
    @yield('content')
</div>
<x-footer/>

<!-- include jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

@livewireScripts

<script src="/js/portal.js"></script>

<script src="/plugins/slick/slick.js"></script>

@stack('scripts')



</body>
</html>
