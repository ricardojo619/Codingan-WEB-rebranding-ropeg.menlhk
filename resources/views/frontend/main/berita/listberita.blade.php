@extends('frontend.body')

@section('halamandinamis')
    <br>

    <br><br><br> <br>
    <div class="container">
        <div class="row">
            <nav class="">
                <ol class="breadcrumb" style="padding: 10px 0 10px 0;">
                    <li class="breadcrumb-item" style="padding-left: 15px;"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Berita</li>
                </ol>
            </nav>
            {{-- 12 --}}
            @foreach ($posts as $row)
                <div class="col-md-4 mb-2">
                    <a href="/baca/{{ $row->slug }}" target="_blank" class="text-dark text-decoration-none">
                        <div class="card h-95 shadow mb-5 bg-body rounded">
                            <div class="card-img">
                                <img src="{{ $row->image }}" class="w-100 rounded" alt="{{ $row->title }}"
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
            <div style="text-align: center">
                {{ $posts->links('vendor.pagination.bootstrap-4') }}
            </div>


        </div>


    </div>
    <br>
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
@endsection
