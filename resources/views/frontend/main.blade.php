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
  <hr class="hr-bold mx-auto">
  <div class="row">
    <div class="col-md-4">
        <div class="text-center">
            <a target="_blank">Statistik PNS per Eselon 1</a>
            <ul>
                <table style="width:100%">
                    <tr>
                      <td>SEKJEN :</td>
                      <td>:</td>
                      <td>110</td>

                      <td>BP2SDM</td>
                      <td>:</td>
                      <td>110</td>
                    </tr>
                    <tr>
                      <td>PKTL</td>
                      <td>:</td>
                      <td>110</td>

                      <td>KSDAE</td>
                      <td>:</td>
                      <td>110</td>
                    </tr>
                    <tr>
                        <td>PSDASHL</td>
                        <td>:</td>
                        <td>110</td>

                        <td>PHPL</td>
                        <td>:</td>
                        <td>110</td>
                    </tr>
                    <tr>
                      <td>PPKL</td>
                      <td>:</td>
                      <td>110</td>
                      
                      <td>PSLB3</td>
                      <td>:</td>
                      <td>110</td>
                    </tr>
                    <tr>
                        <td>PPI</td>
                        <td>:</td>
                        <td>110</td>
                        
                        <td>PSKL</td>
                        <td>:</td>
                        <td>110</td> 
                    </tr>
                    <tr>
                        <td>GAKKUM</td>
                        <td>:</td>
                        <td>110</td>
                          
                        <td>BP2SDM</td>
                        <td>:</td>
                        <td>110</td> 
                    </tr>
                    <tr>
                        <td>LITBANG</td>
                        <td>:</td>
                        <td>110</td>
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
            <a target="_blank">Statistik Pengunjung</a>
            <table style="width:100%">
                <tr>
                    <td><i class="fa-solid fa-globe"></i>&nbsp; Hari Ini</td>
                    <td>:</td>
                    <td>110</td>
                  
                </tr>
                <tr>
                    <td><i class="fa-solid fa-globe"></i>&nbsp; Kemarin</td>
                    <td>:</td>
                    <td>110</td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-globe"></i>&nbsp; Bulan Lalu</td>
                    <td>:</td>
                    <td>110</td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-globe"></i>&nbsp; Bulan Ini</td>
                    <td>:</td>
                    <td>110</td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-globe"></i>&nbsp; Tahun Ini</td>
                    <td>:</td>
                    <td>110</td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-globe"></i>&nbsp; Total</td>
                    <td>:</td>
                    <td>110</td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-wifi mr-3"></i>&nbsp; Online</td>
                    <td>:</td>
                    <td>110</td>
                </tr>
              </table>
        </div>
    </div>


  </div>
                
        </div>
    
@endsection