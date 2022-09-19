@extends('frontend.body')

@section('halamandinamis')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <br>

    <br><br><br> <br>
    <div class="container">
        <div class="row">
            {{-- 12 --}}
            <div class="col-12 berita_baca">
                <nav class="">
                    <ol class="breadcrumb" style="padding: 10px 0 10px 0;">
                        <li class="breadcrumb-item" style="padding-left: 15px;"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Foto</li>
                    </ol>
                </nav>
            </div>
            {{-- <div class="col-3"></div> --}}
            <div class="col-12">
                <div class="photo-gallery">
                    <div class="container">
                        @if ($posts->isNotEmpty())
                            <div class="intro">
                                @foreach ($galeri as $row)
                                    <h2 class="text-center">{{ $row->title }}</h2>
                                    <p class="text-center">{{ str_replace('-', ' ', $row->created_at) }} views
                                        {{ $row->views }} </p>
                                @endforeach
                            </div>
                            <div class="row photos">
                                @foreach ($posts as $baca)
                                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ $baca->image }}"
                                            data-lightbox="photos"><img class="img-fluid"
                                                src="{{ asset($baca->image) }}"></a>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <h2 class="text-center">Data yang anda cari belum tersedia</h2>
                        @endif
                    </div>
                </div>
            </div>
            {{-- <div class="col-9 berita_baca"> --}}


            {{-- <p class="text-capitalize fs-2 fw-bold">{{ $baca->title }}</p> --}}
            {{-- @foreach ($posts as $baca) --}}
            {{-- <div class="text-center">
                        <img src="{{ asset($baca->image) }}" class="rounded" alt="{{ $baca->title }}">
                    </div> --}}
            {{-- <p class=" fs-6" style="color: #000000b3;">{{ str_replace('-', ' ', $baca->created_at) }}, Dilihat
                        {{ $baca->views }}
                        Kali</p> --}}
            {{-- <img class="image-responsive rounded" alt="100%x280" src="{{ asset($baca->image) }}"><br><br> --}}
            {{-- @endforeach --}}
            {{-- </div> --}}



            {{-- <div class="col-3">
                <span class="text-coulumn" style="margin-top: 5px">INFO LAIN</span>
                <hr class="mx-left" width="40%"
                    style="height: 3px;margin: 0 0 15px 0; color: #000; background-color: #000;">
                <div class="card mb-3" style="max-width: 540px;border:1px solid #fff">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid rounded-start" src="{{ asset('img/imgcap.png') }}" alt="gambar">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body" style="padding: 5px;">
                                <p class="p_font font_poppins_berita"
                                    style="width: 100%;height: 36px;overflow: hidden;text-overflow: ellipsis;">Lorem,
                                    ipsum
                                    dolor sit amet consectetur adipisicing elit. Iure, dolore.</p>
                                <p class="card-text mx-2"><small class="text-muted">Last updated 3 ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;border:1px solid #fff">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid rounded-start" src="{{ asset('img/imgcap.png') }}" alt="gambar">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body" style="padding: 5px;">
                                <p class="p_font font_poppins_berita"
                                    style="width: 100%;height: 36px;overflow: hidden;text-overflow: ellipsis;">Lorem,
                                    ipsum
                                    dolor sit amet consectetur adipisicing elit. Iure, dolore.</p>
                                <p class="card-text mx-2"><small class="text-muted">Last updated 3 ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;border:1px solid #fff">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid rounded-start" src="{{ asset('img/imgcap.png') }}" alt="gambar">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body" style="padding: 5px;">
                                <p class="p_font font_poppins_berita"
                                    style="width: 100%;height: 36px;overflow: hidden;text-overflow: ellipsis;">Lorem,
                                    ipsum
                                    dolor sit amet consectetur adipisicing elit. Iure, dolore.</p>
                                <p class="card-text mx-2"><small class="text-muted">Last updated 3 ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="text-coulumn" style="margin-top: 5px">EVENT</span>
                <hr class="mx-left" width="40%"
                    style="height: 3px;margin: 0 0 15px 0; color: #000; background-color: #000;">

                <span class="text-coulumn" style="margin-top: 5px">PENGUMUMAN</span>
                <hr class="mx-left" width="40%"
                    style="height: 3px;margin: 0 0 15px 0; color: #000; background-color: #000;">
            </div> --}}

        </div>



    </div>
    <br>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <style>
        .berita_baca>img,
        .berita_baca a>img {
            margin-left: auto;
            margin-right: auto;
        }

        hr {
            opacity: 1.25;
        }

        a:hover {
            text-decoration: auto;
        }

        .photo-gallery {
            color: #313437;
            background-color: #fff;
        }

        .photo-gallery p {
            color: #7d8285;
        }

        .photo-gallery h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: inherit;
        }

        @media (max-width:767px) {
            .photo-gallery h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px;
            }
        }

        .photo-gallery .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto 40px;
        }

        .photo-gallery .intro p {
            margin-bottom: 0;
        }

        .photo-gallery .photos {
            padding-bottom: 20px;
        }

        .photo-gallery .item {
            padding-bottom: 30px;
        }
    </style>
@endsection
