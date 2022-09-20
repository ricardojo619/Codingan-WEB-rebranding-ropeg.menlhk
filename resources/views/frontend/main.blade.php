@extends('frontend.body')

@section('halamandinamis')
    {{-- carousel --}}
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="true" style="margin-top: 90px">
        <div class="carousel-indicators">
            @foreach ($slider as $row)
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="{{ $loop->index }}"
                    class="{{ $loop->first ? 'active' : '' }}" aria-current="true" aria-label="Slide 1"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($slider as $row)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ $row->image }}" class="d-block w-100" alt="{{ $row->title }}">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- running --}}
    <div class="container mt-4 mb-4" id="myDIVmenu">
        <div class="row">
            <div class="list-group">
                <li class="list-group-item text-white" aria-disabled="true"
                    style="padding-bottom: 0;background-color:#000!important">
                    <marquee loop="1000" class="fw-bold background"
                        style="margin: -5px 0px 10px 0px;
                padding: 15px 0px 0 0;
                font-size: 20px;"
                        onmouseover="this.stop()" onmouseout="this.start()" scrollamount="8">
                        @foreach ($running as $row)
                            <a>{{ $row->title }} </a>
                            &nbsp;&nbsp; || &nbsp;&nbsp;
                        @endforeach
                    </marquee>
                </li>
            </div>
        </div>
    </div>
    <?php
    // echo md5('simpeg_pegawai@77' . date('d-m-Y'));
    // echo md5('simpeg_listuser@77' . date('d-m-Y'));
    // echo md5('simpeg_listpegawai@77' . date('d-m-Y'));
    ?>
    <!-- BATAS RUNNING TEXT DAN BUTTON BAWAH RUNNING TEXT-->
    <section class="bg-darking">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mt-2">
                                <div class="card-img">
                                    <a href="http://simpeg.menlhk.go.id/" target="_blank"
                                        class="text-dark text-decoration-none">
                                        <img src="{{ asset('img/SIMPEGBARU.png') }}" class="w-100 rounded" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mt-2">
                                <div class="card-img">
                                    <a href="http://ropeg.menlhk.go.id/assets/dok/peraturan/2020-10-10-ROADMAP-RB-KLHK-2020-2024.pdf"
                                        target="_blank" class="text-dark text-decoration-none">
                                        <img src="{{ asset('img/ROADMAPBARU.png') }}" class="w-100 rounded" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mt-2">
                                <div class="card-img">
                                    <a href="https://seleksijpt.menlhk.go.id/pengumuman" target="_blank"
                                        class="text-dark text-decoration-none">
                                        <img src="{{ asset('img/JPTBARU.png') }}" class="w-100 rounded" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mt-2">
                                <div class="card-img">
                                    <a href="https://casn.menlhk.go.id/" target="_blank"
                                        class="text-dark text-decoration-none">
                                        <img src="{{ asset('img/CASNBARU.png') }}" class="w-100 rounded" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BATAS GALERY -->
                </div>

            </div>
        </div>
    </section>

    <style>
        .bg-darking {
            background-color: #005f73;
        }
    </style>

    {{-- info --}}
    <section class="bg-white">
        <div class="mt-3"></div>
        <div class="container mt-6">
            <div class="row mt-6">
                <div class="col-md-12 mt-6">
                    <div class="row mt-2">
                        <div class="col-md-12 mt-6">
                            <div class="h4 pb-2  text-center text-uppercase" style="margin-top:15px ;margin-bottom:15px ;">
                                <h2 class="text-center mb-4 mt-2 fw-bold" style="color: black;">
                                    Informasi Terbaru
                                </h2>
                                <hr class="hr-bold mx-auto"style="width: 25.5%;">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        @foreach ($listberita as $row)
                            <div class="col-md-4 mb-2">
                                <a href="/baca/{{ $row->slug }}" target="_blank"
                                    class="text-dark text-decoration-none">
                                    <div class="card h-95 shadow mb-5 bg-body rounded">
                                        <div class="card-img">
                                            <img src="{{ $row->image }}" class="w-100 rounded"
                                                alt="{{ $row->title }}"
                                                style="height: 210px;
                                            width: 100%;
                                            display: block;">
                                        </div>
                                        <div class="card-body">

                                            <p style="width: 100%;
                              height: 50px;
                              overflow: hidden;
                              text-overflow: ellipsis;"
                                                class="p_fontss fw-bold" href="/Simpegsapk">{{ $row->title }}</p>

                                            {{ str_replace('-', ' ', $row->created_at) }}
                                        </div>
                                        <div class="position-relative" style="margin: 40px 10px 25px 0;">
                                            <div class="bg-white position-absolute bottom-0 end-0">
                                                <button type="button" class="btn btn-primary btn-xs text-uppercase"
                                                    style="padding: 2px 5px;
                                              font-size: 14px;background-color: #207ab9">
                                                    Selengkapnya
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>
    <style>
        .carousel-indicators [data-bs-target] {
            width: 34px !important;
            height: 8px !important;
        }

        .p_fontss {
            display: -webkit-box;
        }

        .p_fontss {
            font-size: 16px;
            overflow: hidden;
            line-height: normal;
            text-overflow: ellipsis;
            white-space: normal;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            padding: 0 10px 5px 0;
        }
    </style>
    <!-- Stashed changes -->

    {{-- events --}}
    <div class="container-fluid text-center " style="    margin: -30px 0px 0px 0;">
        <div class="row">
            <div class="col" style="background-color: rgba(226, 223, 223, 0.825);color: black;"><br>
                <span class="text-coulumn" style="margin-top: 12px">INFO LAIN</span>
                <hr class="mx-auto" width="40%">
                <div class="position-relative">
                    <div class="position-absolute top-0 start-25">
                        @foreach ($listinfolain as $row)
                            <div class="text-start font-poppin;">{{ str_replace('-', ' ', $row->created_at) }}</div>
                            <div class="text-start font-poppin" style="font-size: 20px"><a
                                    href="/baca/{{ $row->slug }}" target="_blank"
                                    style="color:rgba(2, 83, 107, 0.811)">

                                    <p style="width: 100%;
                                    height: 50px;
                                    overflow: hidden;
                                    text-overflow: ellipsis;"
                                        class="p_fontss" href="/baca/{{ $row->slug }}">{{ $row->title }}
                                    </p>
                                </a></div><br>
                        @endforeach
                    </div>
                </div>
                <br>
            </div>
            <div class="col" style="background-color: rgba(2, 83, 107, 0.811);color: white);"><br>
                <span class="text-coulumn" style="margin-top: 12px; color: white;">EVENT</span>
                <hr class="mx-auto" width="40%">
                <div class="position-relative">
                    <div class="position-absolute top-0 start-18">
                        @foreach ($listevent as $row)
                            <div class="text-start font-poppin text-white">{{ str_replace('-', ' ', $row->created_at) }}
                            </div>
                            <div class="text-start font-poppin" style="font-size: 20px"><a
                                    href="/baca/{{ $row->slug }}" target="_blank" style="color:white">
                                    <p style="width: 100%;
                                    height: 50px;
                                    overflow: hidden;
                                    text-overflow: ellipsis;"
                                        class="p_fontss" href="/baca/{{ $row->slug }}">{{ $row->title }}
                                    </p>
                                </a></div>
                            <br>
                        @endforeach

                    </div>
                    <div class="text-center top-50" style="padding-top: 50%;">
                        <a href="/Btnlihse" class="btn btn-light mb-4 mt-2 justify-content-center"
                            style="border-radius: 30px">
                            <span style="color: rgba(2, 83, 107, 0.811);">LIHAT SEMUA</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col" style="background-color: rgba(226, 223, 223, 0.825);color: black;"><br>
                <span class="text-coulumn" style="margin-top: 12px">PENGUMUMAN</span>

                <div class="position-relative">
                    <div style="">
                        <hr class="mx-auto" width="40%">
                        <div style="padding-left: 70px">
                            @foreach ($listpengumuman as $row)
                                <div class="text-start font-poppin">{{ str_replace('-', ' ', $row->created_at) }}</div>
                                <div class="text-start font-poppin" style="font-size: 20px"> <a
                                        href="/baca/{{ $row->slug }}" target="_blank"
                                        style="color:rgba(2, 83, 107, 0.811)">
                                        <p style="width: 100%;
                                        height: 50px;
                                        overflow: hidden;
                                        text-overflow: ellipsis;"
                                            class="p_fontss" href="/baca/{{ $row->slug }}">{{ $row->title }}
                                        </p>
                                    </a></div><br>
                            @endforeach

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    {{-- galeri --}}
    <br><br>

    <h2 class="text-center mb-4 fw-bold" style="color: black;">
        Galeri
    </h2>
    <hr class="hr-bold mx-auto" style="width: 6.5%;">

    <section>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'>
        </script>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css' rel='stylesheet'>
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="Line-2">
                    {{-- <h3 class="galeri-title">Galeri Kegiatan</h3> --}}
                    <div class="owl-carousel adp-x owl-theme">
                        @foreach ($listgaleri as $row)
                            <div class='item'>
                                <div class="col-md-12 col-sm-3">
                                    <div class="card mb-6 box-shadow thumbnail" style="border-radius: 10px;">
                                        <a href="/foto/{{ $row->id }}" target="_blanl">
                                            <img src="{{ $row->image }}" class="img_radius">
                                            <div class="card-body align-items-start p-2">
                                                <div class="font_galeri">
                                                    <ul style="padding: 0 0 0 10px;">
                                                        <li>{{ str_replace('-', ' ', $row->created_at) }} views
                                                            {{ $row->views }}</li>
                                                    </ul>
                                                </div>
                                                <p class="p_font font_poppins_berita"
                                                    style="width: 100%;height: 56px;overflow: hidden;text-overflow: ellipsis;font-size: 14px;">
                                                    <a href="/foto/{{ $row->id }}" target="_blanl"
                                                        style="text-decoration: none;color: #212529; font-size: 18px;">
                                                        {{ $row->title }} </a>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- serba serbi --}}
    <br><br>
    <div class="page-wrapper">
        <h2 class="text-center mb-4 fw-bold" style="color: black;">
            Serba-Serbi
        </h2>
        <style>
            tbody,
            td,
            tfoot,
            th,
            thead,
            tr {
                padding: 7px;
            }
        </style>
        <hr class="hr-bold mx-auto" style=" width:13.5%;">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <h5>
                        <div class="title-linekita fw-bold">Statistik PNS per Eselon 1</div>
                    </h5>
                    <ul>
                        <table class="mt-2 text-black fw-semibold" style="width:110%">
                            {{-- @foreach ($dataapi as $row) --}}
                            @foreach ($dataapi as $no => $row)
                                <tr>
                                    <td style="text-align: left;padding-left: 50px">{{ $row['0']['eselon'] }}</td>
                                    <td>:</td>
                                    <td style="text-align: right;padding-right: 50px">{{ $row['0']['total'] }}</td>

                                    <td style="text-align: left;padding-left: 50px">{{ $row['1']['eselon'] }}</td>
                                    <td>:</td>
                                    <td style="text-align: right;padding-right: 50px">{{ $row['1']['total'] }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;padding-left: 50px">{{ $row['2']['eselon'] }}</td>
                                    <td>:</td>
                                    <td style="text-align: right;padding-right: 50px">{{ $row['2']['total'] }}</td>

                                    <td style="text-align: left;padding-left: 50px">{{ $row['3']['eselon'] }}</td>
                                    <td>:</td>
                                    <td style="text-align: right;padding-right: 50px">{{ $row['3']['total'] }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;padding-left: 50px">{{ $row['4']['eselon'] }}</td>
                                    <td>:</td>
                                    <td style="text-align: right;padding-right: 50px">{{ $row['4']['total'] }}</td>

                                    <td style="text-align: left;padding-left: 50px">{{ $row['5']['eselon'] }}</td>
                                    <td>:</td>
                                    <td style="text-align: right;padding-right: 50px">{{ $row['5']['total'] }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;padding-left: 50px">{{ $row['6']['eselon'] }}</td>
                                    <td>:</td>
                                    <td style="text-align: right;padding-right: 50px">{{ $row['6']['total'] }}</td>

                                    <td style="text-align: left;padding-left: 50px">{{ $row['7']['eselon'] }}</td>
                                    <td>:</td>
                                    <td style="text-align: right;padding-right: 50px">{{ $row['7']['total'] }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;padding-left: 50px">{{ $row['8']['eselon'] }}</td>
                                    <td>:</td>
                                    <td style="text-align: right;padding-right: 50px">{{ $row['8']['total'] }}</td>

                                    <td style="text-align: left;padding-left: 50px">{{ $row['9']['eselon'] }}</td>
                                    <td>:</td>
                                    <td style="text-align: right;padding-right: 50px">{{ $row['9']['total'] }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;padding-left: 50px">{{ $row['10']['eselon'] }}</td>
                                    <td>:</td>
                                    <td style="text-align: right;padding-right: 50px">{{ $row['10']['total'] }}</td>

                                    <td style="text-align: left;padding-left: 50px">{{ $row['11']['eselon'] }}</td>
                                    <td>:</td>
                                    <td style="text-align: right;padding-right: 50px">{{ $row['11']['total'] }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;padding-left: 50px">{{ $row['12']['eselon'] }}</td>
                                    <td>:</td>
                                    <td style="text-align: right;padding-right: 50px">{{ $row['12']['total'] }}</td>

                                    <td style="text-align: left;padding-left: 50px"></td>
                                    <td></td>
                                    <td style="text-align: right;padding-right: 50px"></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold fs-5"> &nbsp; &nbsp; Total</td>
                                    <td>:</td>
                                    <td class="fw-bold fs-5" style="text-align: right;padding-right: 50px">
                                        @currency($row['13']['total']) </td>
                                </tr>
                            @endforeach
                            <tr style="padding-top: -10px !important">
                                <td colspan="6" class="fs-8"> &nbsp; &nbsp; <i>Data SIMPEG per 02 September 2022,
                                        bersifat dinamis.</i>
                                <td>
                            </tr>
                        </table>

                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="">
                    <h5 style="margin-left: 160px;">
                        <div class="title-linekita fw-bold">Struktur Organisasi</div>
                        @foreach ($liststruktur as $row)
                            <a class="btn bg-darkku text-white mt-3 text-uppercase round text-center"
                                style="margin-left: -17.5px;" href="/struktur-organisasi/{{ $row->id }}/">
                                Struktur Organisasi
                            </a>
                        @endforeach
                    </h5>

                </div>
            </div>

            <div class="col-md-4">
                <div class="text-center">
                    <h5 style="margin-left: 90px;">
                        <div class="title-linekita fw-bold">Statistik Pengunjung</div>
                    </h5>
                    {{-- <h5 target="_blank" style="padding-right: 120px">Statistik Pengunjung</h5> --}}
                    {{-- <div class="title-linekita fw-bold"  style="padding-left: 90px">Statistik Pengunjung</div> --}}

                    <table style="width:60%" class="mt-3">
                        <tr>
                            <td style="text-align: left;padding-left: 90px"><i class="fa-regular fa-user"></i></i>&nbsp;
                                Hari Ini</td>
                            <td>:</td>
                            <td style="text-align: right;padding-right: 20px">110</td>

                        </tr>
                        <tr>
                            <td style="text-align: left;padding-left: 90px"><i class="fa-regular fa-user"></i>&nbsp;
                                Kemarin
                            </td>
                            <td>:</td>
                            <td style="text-align: right;padding-right: 20px">110</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;padding-left: 90px"><i class="fa-regular fa-user"></i>&nbsp; Bulan
                                Lalu</td>
                            <td>:</td>
                            <td style="text-align: right;padding-right: 20px">110</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;padding-left: 90px"><i class="fa-regular fa-user"></i>&nbsp; Bulan
                                Ini</td>
                            <td>:</td>
                            <td style="text-align: right;padding-right: 20px">110</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;padding-left: 90px"><i
                                    class="fa-regular fa-calendar"></i></i>&nbsp;
                                Tahun Ini</td>
                            <td>:</td>
                            <td style="text-align: right;padding-right: 20px">110</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;padding-left: 90px"><i class="fa-solid fa-globe"></i>&nbsp; Total
                            </td>
                            <td>:</td>
                            <td style="text-align: right;padding-right: 20px">1</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;padding-left: 90px"><i class="fa-solid fa-wifi mr-3"></i>&nbsp;
                                Online</td>
                            <td>:</td>
                            <td style="text-align: right;padding-right: 20px">10</td>
                        </tr>
                    </table>
                </div>
            </div>


        </div>

    </div>
    <br>
    <br>
    <br>
    <style>

    </style>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 10400,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    </script>
@endsection
