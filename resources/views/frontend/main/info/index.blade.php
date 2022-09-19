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
                            {{-- {{ $row->slug }} --}}
                            <a href="/baca/{{ $row->slug }}" class="text-dark text-decoration-none">
                                <div class="card h-95 shadow mb-5 bg-body rounded">
                                    <div class="card-img">
                                        <img src="{{ $row->image }}" class="w-100 rounded" alt="">
                                    </div>
                                    <div class="card-body">

                                        <p style="width: 100%;
                              height: 50px;
                              overflow: hidden;
                              text-overflow: ellipsis;"
                                            class="_pfonts fw-bold" href="/Simpegsapk">{{ $row->title }}</p>

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
                    {{-- @foreach ($listpengumuman as $item)
                        {{ $item->title }}
                        <br>
                    @endforeach --}}

                </div>
            </div>

        </div>
    </div>
</section>
<style>
    .p_fontss {
        display: -webkit-box;
    }

    .p_fontss {
        font-size: 16px;
        overflow: hidden;
        line-height: normal;
        text-overflow: ellipsis;
        white-space: normal;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        padding: 0 10px 5px 10px;
    }
</style>
<!-- Stashed changes -->
