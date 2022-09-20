<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <title>{{ isset($title) ? $title : 'Judul Tidak ada' }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/Lambangklhk.png') }}">

    <script src="{{ asset('carousel/bootstrap5.2.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="{{ asset('carousel/carousel.css') }}" rel="stylesheet">
    {{--  --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}

    @include('frontend.Template.head')
</head>

<body>
    @include('frontend.main.navbar.index')
    @yield('halamandinamis')
    {{-- <div id="stop" class="scrollTop" style="text-align: center;">
        <span>
            <a href="">
                <span class="glyphicon glyphicon-chevron-up"></span>
                <div>T O P</div>
            </a>
        </span>
    </div> --}}
</body>
@include('frontend.Template.foot')

</html>
