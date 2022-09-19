<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title : 'Judul Tidak ada' }}</title>
    <link rel="shortcut icon" href="{{ asset('../img/klhk.svg') }}" type="image/x-icon">

    <script src="{{ asset('carousel/bootstrap5.2.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="{{ asset('carousel/carousel.css') }}" rel="stylesheet">
    @include('front.Template.head')

</head>

<body>
    @include('front.navbar.index')
    <br><br>
    <br><br>
    <br><br>
    @yield('ambilhalaman')

</body>
@include('front.Template.foot')

</html>
