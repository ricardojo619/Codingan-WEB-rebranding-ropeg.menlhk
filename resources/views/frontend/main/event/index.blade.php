
<div class="container-fluid text-center " style="    margin: -30px 0px 0px 0;">
    <div class="row">
      <div class="col" style="background-color: rgba(226, 223, 223, 0.825);color: black;"><br>
        <span class="text-coulumn" style="margin-top: 12px">INFO LAIN</span>
        <hr class="mx-auto" width="40%">
        <div class="position-relative">
          <div class="position-absolute top-0 start-25">
            @if ($infolain->count() <= 3)
            @for ($p=0; $p<1;$p++)
            <div class="text-start font-poppin">{{ $infolain[$p]->date }}</div>
            <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i>
                <a href="/Bimtekadm" style="color:rgba(2, 83, 107, 0.811)">
                    {{ $infolain[$p]->judulBerita }}
                </a>
            </div>
            <br>
             @endfor
            @else
            @for ($p=0; $p<3;$p++)
            <div class="text-start font-poppin">{{ $infolain[$p]->date }}</div>
            <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i>
                <a href="/Bimtekadm" style="color:rgba(2, 83, 107, 0.811)">
                    {{ $infolain[$p]->judulBerita }}
                </a>
            </div>
            <br>
            @endfor
            @endif

          </div>
        </div>
        <br>
      </div>
      <div class="col" style="background-color: rgba(2, 83, 107, 0.811);color: white);"><br>
        <span class="text-coulumn" style="margin-top: 12px; color: white;">EVENT</span>
        <hr class="mx-auto" width="40%">
        <div class="position-relative">
          <div class="position-absolute top-0 start-18">
            @if ($event->count() < '3')
            @for ($p=0; $p<1;$p++)
            <div class="text-start font-poppin" style="color: white">{{ $event[$p]->date }}</div>
            <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i>
                <a href="/Bimtekadm" style="color:rgba(255, 255, 255, 0.811)">
                    {{ $event[$p]->judulBerita }}
                </a>
            </div>
            <br>
             @endfor
            @else
            @for ($p=0; $p<3;$p++)
            <div class="text-start font-poppin">{{ $event[$p]->date }}</div>
            <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i>
                <a href="/Bimtekadm" style="color:rgba(255, 255, 255, 0.811)">
                    {{ $event[$p]->judulBerita }}
                </a>
            </div>
            <br>
            @endfor
            @endif

          </div>
          <div class="text-center top-50" style="padding-top: 50%;">
            <a href="/Btnlihse" class="btn btn-light mb-4 mt-2 justify-content-center" style="border-radius: 30px">
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
                {{-- @for ($p=0; $p<3;$p++)
                <div class="text-start font-poppin">{{ $pengumuman[$p]->date }}</div>
                <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i>
                    <a href="/Bimtekadm" style="color:rgba(2, 83, 107, 0.811)">
                        {{ $pengumuman[$p]->judulBerita }}
                    </a>
                </div>
                <br>
                @endfor --}}
                @if ($pengumuman->count() < '3')
            @for ($p=0; $p<1;$p++)
            <div class="text-start font-poppin" style="color: white">{{ $event[$p]->date }}</div>
            <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i>
                <a href="/Bimtekadm" style="color:rgba(2, 83, 107, 0.811">
                    {{ $pengumuman[$p]->judulBerita }}
                </a>
            </div>
            <br>
             @endfor
            @else
            @for ($p=0; $p<3;$p++)
            <div class="text-start font-poppin">{{ $pengumuman[$p]->date }}</div>
            <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i>
                <a href="/Bimtekadm" style="color:rgba(2, 83, 107, 0.811)">
                    {{ $pengumuman[$p]->judulBerita }}
                </a>
            </div>
            <br>
            @endfor
            @endif
              </div>
            </div>
          </div>


      </div>
    </div>
  </div>

  <style>
    .start-25 {
        left: 25%!important;
    }
    .start-18 {
        left: 18%!important;
    }
  </style>
