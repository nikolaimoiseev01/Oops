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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/plugins/jquery-mask/jquery.mask.min.js"></script>

@livewireScripts

<script>
    // Общее обознаение вызова SWAL (LIVEWIRE)
    window.addEventListener('swal_fire', event => {
        Swal.fire({
            title: event.detail.title,
            icon: event.detail.type,
            html: '<p>' + event.detail.text + '</p>',
            showDenyButton: event.detail.showDenyButton,
            showConfirmButton: event.detail.showConfirmButton,
            showCancelButton: false,
            confirmButtonText: `Все верно`,
            denyButtonText: `Отменить`,
        }).then((result) => {
            if (result.isConfirmed) {
                window.livewire.emit(event.detail.swal_function_to_confirm,
                    event.detail.swal_detail_id)
            }
        })
    })
</script>

<script src="/js/portal.js"></script>

<script src="/plugins/slick/slick.js"></script>

@stack('scripts')



</body>
</html>
