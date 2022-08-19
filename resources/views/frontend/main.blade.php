@extends('frontend.body')

@section('halamandinamis') 
    @include('frontend.main.carousel.index')
    @include('frontend.main.running.index')
    @include('frontend.main.info.index')
    @include('frontend.main.galeri.index')
    @include('frontend.main.event.index') 
    <div class="page-wrapper">
        <hr class="featurette-divider">
<h2 class="text-center mb-4" style="color: black;">
    Serba-serbi
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
            <a target="_blank">Statistik PNS per Eselon 1</a>
            <ul>
                <table class="mt-2" style="width:100%;bor">
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
                        <td>Total</td>
                        <td>:</td>
                        <td style="text-align: right;padding-right: 50px">10</td>
                    </tr>
                  </table>
                   
            </ul>
        </div>
    </div>

    <div class="col-md-4">
        <div class="text-center">
            <a target="_blank">Struktur Organisasi Biro Kepegawaian dan Organisasi Tata Laksana</a>
            <p><a class="btn btn-lg btn-primary mt-2" href="/beranda/struktur">Struktur Organisasi</a></p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="text-center">
            <a target="_blank" style="padding-right: 120px">Statistik Pengunjung</a>
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
    
@endsection