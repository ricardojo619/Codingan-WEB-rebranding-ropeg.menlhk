@extends('frontend.body')

@section('halamandinamis') 
    @include('frontend.main.carousel.index')
    @include('frontend.main.running.index')
    @include('frontend.main.info.index')
    @include('frontend.main.event.index') 
    @include('frontend.main.galeri.index')
    <div class="page-wrapper">
        <hr class="featurette-divider">
<h2 class="text-center mb-4 fw-bold" style="color: black;">
    Serba-Serbi
  </h2>
  <style>
    tbody, td, tfoot, th, thead, tr{
        padding: 7px;
    }
  </style>
  <hr class="hr-bold mx-auto">
  <div class="row">
    <div class="col-md-4">
        <div class="text-center">
            {{-- <h5 class="text-center mb-4">
                Statistik per Eselon 1
              </h5> --}}
              <h5>
                <div class="title-linekita fw-bold">Statistik PNS per Eselon 1</div>
              </h5>
            <ul>
                <table class="mt-2 text-black fw-semibold" style="width:100%;bor">
                    <tr>
                      <td style="text-align: left;padding-left: 50px">SEKJEN</td>
                      <td>:</td>
                      <td style="text-align: right;padding-right: 50px">110</td>

                      <td style="text-align: left;padding-left: 50px">BP2SDM</td>
                      <td>:</td>
                      <td style="text-align: right;padding-right: 50px">110</td>
                    </tr>
                    <tr>
                      <td style="text-align: left;padding-left: 50px">PKTL</td>
                      <td>:</td>
                      <td style="text-align: right;padding-right: 50px">110</td>

                      <td style="text-align: left;padding-left: 50px">KSDAE</td>
                      <td>:</td>
                      <td style="text-align: right;padding-right: 50px">110</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;padding-left: 50px">PSDASHL</td>
                        <td>:</td>
                        <td style="text-align: right;padding-right: 50px">10</td>

                        <td style="text-align: left;padding-left: 50px">PHPL</td>
                        <td>:</td>
                        <td style="text-align: right;padding-right: 50px">110</td>
                    </tr>
                    <tr>
                      <td style="text-align: left;padding-left: 50px">PPKL</td>
                      <td>:</td>
                      <td style="text-align: right;padding-right: 50px">110</td>
                      
                      <td style="text-align: left;padding-left: 50px">PSLB3</td>
                      <td>:</td>
                      <td style="text-align: right;padding-right: 50px">110</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;padding-left: 50px">PPI</td>
                        <td>:</td>
                        <td style="text-align: right;padding-right: 50px">110</td>
                        
                        <td style="text-align: left;padding-left: 50px">PSKL</td>
                        <td>:</td>
                        <td style="text-align: right;padding-right: 50px">110</td> 
                    </tr>
                    <tr>
                        <td style="text-align: left;padding-left: 50px">GAKKUM</td>
                        <td>:</td>
                        <td style="text-align: right;padding-right: 50px">110</td>
                          
                        <td style="text-align: left;padding-left: 50px">BP2SDM</td>
                        <td>:</td>
                        <td style="text-align: right;padding-right: 50px">11</td> 
                    </tr>
                    <tr>
                        <td style="text-align: left;padding-left: 50px">LITBANG</td>
                        <td>:</td>
                        <td style="text-align: right;padding-right: 50px">0</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="text-align: right;padding-right: 50px"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="text-align: right;padding-right: 50px"></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Total</td>
                        <td>:</td>
                        <td class="fw-bold" style="text-align: right;padding-right: 50px">10</td>
                    </tr>
                  </table>
                   
            </ul>
        </div>
    </div>

    <div class="col-md-4">
        <div class="">
            <h5 style="margin-left: 160px;">
                <div class="title-linekita fw-bold">Struktur Organisasi</div>
                <a class="btn bg-darkku text-white mt-3 text-uppercase round text-center"  style="margin-left: -25px;" href="/beranda/struktur" >
                    Struktur Organisasi
                    
                </a>
              </h5>
           
        </div> 
    </div>

    <div class="col-md-4">
        <div class="text-center" >
            <h5 style="margin-left: 90px;">
                <div class="title-linekita fw-bold">Statistik Pengunjung</div>
              </h5>
            {{-- <h5 target="_blank" style="padding-right: 120px">Statistik Pengunjung</h5> --}}
            {{-- <div class="title-linekita fw-bold"  style="padding-left: 90px">Statistik Pengunjung</div> --}}
            <table style="width:60%" class="mt-3">
                <tr>
                    <td style="text-align: left;padding-left: 90px"><i class="fa-regular fa-user"></i></i>&nbsp; Hari Ini</td>
                    <td>:</td>
                    <td style="text-align: right;padding-right: 20px">110</td>
                  
                </tr>
                <tr>
                    <td style="text-align: left;padding-left: 90px"><i class="fa-regular fa-user"></i>&nbsp; Kemarin</td>
                    <td>:</td>
                    <td style="text-align: right;padding-right: 20px">110</td>
                </tr>
                <tr>
                    <td style="text-align: left;padding-left: 90px"><i class="fa-regular fa-user"></i>&nbsp; Bulan Lalu</td>
                    <td>:</td>
                    <td style="text-align: right;padding-right: 20px">110</td>
                </tr>
                <tr>
                    <td style="text-align: left;padding-left: 90px"><i class="fa-regular fa-user"></i>&nbsp; Bulan Ini</td>
                    <td>:</td>
                    <td style="text-align: right;padding-right: 20px">110</td>
                </tr>
                <tr>
                    <td style="text-align: left;padding-left: 90px"><i class="fa-regular fa-calendar"></i></i>&nbsp; Tahun Ini</td>
                    <td>:</td>
                    <td style="text-align: right;padding-right: 20px">110</td>
                </tr>
                <tr>
                    <td style="text-align: left;padding-left: 90px"><i class="fa-solid fa-globe"></i>&nbsp; Total</td>
                    <td>:</td>
                    <td style="text-align: right;padding-right: 20px">1</td>
                </tr>
                <tr>
                    <td style="text-align: left;padding-left: 90px"><i class="fa-solid fa-wifi mr-3"></i>&nbsp; Online</td>
                    <td>:</td>
                    <td style="text-align: right;padding-right: 20px">10</td>
                </tr>
              </table>
        </div>
    </div>


  </div>
                
        </div>
    <style>
        .bg-darkku{
            background-color: #005f73;
            font-size: 14px;
        }.round {
            border-radius: 1.05rem!important;
        }
        .title-linekita {
            position: relative; /* important for absolute child to work */
            font-size: 18px;
            font-weight: normal;
            padding: 0 0 4px;
            text-align: left;
        }
        .title-linekita {
            position: relative; /* important for absolute child to work */
            font-size: 18px;
            font-weight: normal;
            padding: 0 0 4px;
            text-align: left;
        }
        H5{
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
@endsection