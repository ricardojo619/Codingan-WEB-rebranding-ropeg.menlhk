<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="{{ asset('carousel/carousel.css') }}" rel="stylesheet">
    @include('frontend.Template.head') 
  </head>
  <body> 
    @include('frontend.main.navbar.index') 
    @yield('halamandinamis') 
  </body>
    @include('frontend.Template.foot') 
</html>
