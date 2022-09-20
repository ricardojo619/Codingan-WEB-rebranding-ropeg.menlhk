<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<link rel="stylesheet" href="{{ asset('footer/assets/css/theme.css') }}">
<link rel="stylesheet" href="{{ asset('footer/assets/css/maicons.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"> --}}
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'>
</script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;500;700&display=swap" rel="stylesheet">

{{-- owl --}}

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    /* #001219 */
    .navbar-nav .nav-link {
        color: #f5f9f6 !important;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    /*  */
    .p_font {
        font-size: 16px;
        overflow: hidden;
        line-height: normal;
        text-overflow: ellipsis;
        white-space: normal;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        padding: 0 10px 5px 10px;
    }

    .p_font {
        display: -webkit-box;
    }

    .bg-navbarr {
        background-color: #005f73;

    }

    .bg-darkku {
        background-color: #005f73;
        font-size: 14px;
    }

    .round {
        border-radius: 1.05rem !important;
    }

    .title-linekita {
        position: relative;
        /* important for absolute child to work */
        font-size: 18px;
        font-weight: normal;
        padding: 0 0 4px;
        text-align: left;
    }

    H5 {
        margin-left: 80px;
    }

    .title-linekita::after {
        content: '';
        /* required to display pseudo elements */
        height: 1px;
        /* this works like a border-width */
        width: 10%;
        /* you can use a percentage of parent or fixed px value */
        background: #CCC;
        /* the color of border */
        position: absolute;
        bottom: 0;
        /* position it at the bottom of parent */
        margin: 0 auto;
        left: 0;
        /* horizontal centering */
    }

    /* owl */
    .bg-darkku {
        background-color: #005f73;
        font-size: 14px;
    }

    .round {
        border-radius: 1.05rem !important;
    }

    .title-linekita {
        position: relative;
        /* important for absolute child to work */
        font-size: 18px;
        font-weight: normal;
        padding: 0 0 4px;
        text-align: left;
    }

    .title-linekita {
        position: relative;
        /* important for absolute child to work */
        font-size: 18px;
        font-weight: normal;
        padding: 0 0 4px;
        text-align: left;
    }

    H5 {
        margin-left: 80px;
    }

    .title-linekita::after {
        content: '';
        height: 3px;
        width: 15%;
        background: #000;
        position: absolute;
        bottom: 0;
        margin: 0 auto;
        left: 0;
    }
</style>

{{--  --}}
<style type="text/css">
    #Line-2 h3.galeri-title:after {
        background: #ffc300 none repeat scroll 0 0;
        bottom: 0;
        content: "";
        height: 2px;
        left: 0px;
        position: absolute;
        width: 15%;
        top: 56px;
    }

    .img_radius {
        padding: 0 0 0 0;
        cursor: pointer;
        height: 160px;
        width: 100%;
        display: block;
    }

    .owl-carousel .owl-item img {
        height: 150px;
    }

    .font_galeri>ul>li {
        font-size: 13px;
        display: inline-block;
        font-family: 'Poppins', sans-serif;
        color: #767676;
        list-style-type: none;
    }

    .galeri-title {
        font-family: 'Poppins', sans-serif;
        font-size: 22px;
        font-weight: 600;
    }

    /* div#Line-2 h3.galeri-title {
                                                                            border-bottom: 1px solid #ddd;
                                                                            padding-bottom: 10px;
                                                                        } */

    #Line-2 h3.galeri-title:after {
        background: #ffc300 none repeat scroll 0 0;
        bottom: 0;
        content: "";
        height: 2px;
        left: 0px;
        position: absolute;
        width: 15%;
        top: 56px;
    }

    @media only screen and (max-width : 576px),
    only screen and (max-device-width : 576px) {
        #Line-2 h3.galeri-title:after {
            background: #ffc300 none repeat scroll 0 0;
            bottom: 0;
            content: "";
            height: 2px;
            left: 0px;
            position: absolute;
            width: 40%;
            top: 34px;
        }

        .owl-carousel .owl-item img {
            height: 240px;
        }
    }

    . .kontentkalender {
        font-size: 14px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        font-family: 'Poppins', sans-serif;
    }

    .kalendertanggal {
        width: 50px;
        float: left;
        margin-right: 10px;
    }

    .tanggalsp2kp {
        font-size: 16px;
        /*font-family: Gotham;*/
        font-family: 'Poppins', sans-serif;
        color: #fff;
        background: #012233;
        text-align: center;
        border-bottom: 1px solid;
    }

    .bulansp2kp {
        font-size: 10px;
        /*font-family: Roboto;*/
        font-family: 'Poppins', sans-serif;
        background: #036ca5;
        color: #fff;
        text-align: center;
    }

    .sp2kpkalendercontent {
        padding: 0;
        padding-bottom: 10px;
        margin-bottom: 10px;
        min-height: 75px;
    }

    .owl-nav {
        position: absolute;
        top: -62px;
        right: 0;
    }

    .owl-nav {
        margin: 8px auto !important;
    }

    .owl-nav button span {
        background: #275d71 !important;
        padding: 10px 20px;
        display: block;
        border: solid 1px #ddd;
        color: #fff;
        font-weight: 900;
    }

    .owl-theme .owl-nav [class*=owl-] {
        color: #FFF;
        font-size: 14px;
        margin: 5px;
        padding: 4px 7px;
        background: #D6D6D6;
        display: inline-block;
        cursor: pointer;
        border-radius: 3px;
    }

    .start-25 {
        left: 25% !important;
    }

    .start-18 {
        left: 18% !important;
    }
</style>

<!-- Custom styles for this template -->
<link href="{{ asset('carousel/carousel.css') }}" rel="stylesheet">
<script>
    // Jquery ScrollTop
    // $(document).ready(function() {
    //     var altura = $('.menu').offset().top;
    //     $(window).on('scroll', function() {
    //         if ($(window).scrollTop() > altura) {
    //             $('.menu').addClass('menu-fixed');
    //         } else {
    //             $('.menu').removeClass('menu-fixed');
    //         }
    //     });

    // });
    //
    // $(document).ready(function() {
    //     var scrollTop = $(".scrollTop");

    //     $(window).scroll(function() {
    //         var topPos = $(this).scrollTop();
    //         if (topPos > 100) {
    //             $(scrollTop).css("opacity", "1");

    //         } else {
    //             $(scrollTop).css("opacity", "0");
    //         }
    //     });
    //     $(scrollTop).click(function() {
    //         $('html, body').animate({
    //             scrollTop: 0
    //         }, 800);
    //         return false;
    //     });
    //     var h1 = $("#div").position();
    //     var h2 = $("#h2").position();
    //     var h3 = $("#h3").position();

    //     $('.myDIVmenu').click(function() {
    //         $('html, body').animate({
    //             scrollTop: h1.top
    //         }, 500);
    //         return false;
    //     });
    //     $('.link2').click(function() {
    //         $('html, body').animate({
    //             scrollTop: h2.top
    //         }, 500);
    //         return false;
    //     });
    //     $('.link3').click(function() {
    //         $('html, body').animate({
    //             scrollTop: h3.top
    //         }, 500);
    //         return false;
    //     });
    // });
</script>
