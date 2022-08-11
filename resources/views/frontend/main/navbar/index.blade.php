 
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/bootstrap-navbar-multi-level-dropdowns/css/bootnavbar.css?v2">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<script src="https://www.jqueryscript.net/demo/bootstrap-navbar-multi-level-dropdowns/js/bootnavbar.js?v2" ></script>
<script>
    $(function () {
        $('#main_navbar').bootnavbar();
    })
</script>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="main_navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/logoropegklhk.png') }}" alt="" style="width: 50%;height: 50%">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> --}}
        {{-- id="navbarCollapse"  --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mt-2 me-4">
            
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Berita</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Administrasi Kepegawaian
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                  <li><a class="dropdown-item" href="#">Pengangkatan PNS</a></li>
                  <li><a class="dropdown-item" href="#">Kartu Pegawai</a></li>
                  <li><a class="dropdown-item" href="#">Kartu Istri/Suami</a></li>
                  <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              Alih Tugas
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                              <li><a class="dropdown-item" href="#">Alih Tugas Lingkungan KLHK</a></li>
                              <li><a class="dropdown-item" href="#">Alih Tugas dari Kementerian LHK ke PEMDA/Instansi Lain</a></li>
                              <li><a class="dropdown-item" href="#">Alih Tugas dari PEMDA/Instansi Lain ke Lingkup Kementerian LHK</a></li>  
                          </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Pengembangan Pegawai
                    </a> 
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">  
                        <li><a href="#" class="dropdown-item">Ujian Dinas</a></li>
                        <li><a href="#" class="dropdown-item">Ujian GI/PI/PG</a></li>
                        <li><a href="#" class="dropdown-item">Izin Belajar/Tugas Belajar</a></li>
                        <li><a href="#" class="dropdown-item">Seleksi 4 Kriteria</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Diklat Kepemimpinan
                            </a>
                            <ul class="dropdown-menu left" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item" href="#">Tingkat I</a></li>
                                <li><a class="dropdown-item" href="#">Tingkat II</a></li> 
                                <li><a class="dropdown-item" href="#">Tingkat III</a></li> 
                                <li><a class="dropdown-item" href="#">Tingkat IV</a></li> 
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-item">Personal Assesment Centre (PAC)</a></li>
                        <li><a href="#" class="dropdown-item">Seleksi Jabatan Lowong Pimpinan Tinggi</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        LHKPN
                    </a> 
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">  
                      <a href="#" class="dropdown-item">Mengenai LHKPN</a>
                      <a href="#" class="dropdown-item">Prosedur Pelayanan LHKPN</a> 
                      <a href="#" class="dropdown-item">Bimbingan Teknis Pengisian</a>
                      <a href="#" class="dropdown-item">Formulir LHKPN</a> 
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Pensiun
                    </a> 
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">  
                      <a href="#" class="dropdown-item">Pensiun Otomatis (Mencapai Batas Usia Pensiun)</a>
                      <a href="#" class="dropdown-item">Pensiun Janda/Duda dari PNS yang Tewas</a> 
                      <a href="#" class="dropdown-item">Pensiun Janda/Duda dari PNS yang Meninggal Dunia</a>
                      <a href="#" class="dropdown-item">Pensiun Janda/Duda dari Pensiunan PNS YANG Meninggal Dunia</a>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Satya Lencana
                    </a> 
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">  
                        <a href="#" class="dropdown-item">Bintang Jasa</a>
                        <a href="#" class="dropdown-item">Satyalancana Pembangunan</a> 
                        <a href="#" class="dropdown-item">Satyalancana Karya Satya</a>
                        <a href="#" class="dropdown-item">Satyalancana Wirakarya</a> 
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="#">Pencantuman Gelar</a></li>
                  <li><a class="dropdown-item" href="#">Ralat NIP</a></li>
                   
              </ul>
            </li>  
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Layanan Kepegawaian
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Kenaikan Pangkat
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="#">Kenaikan Pangkat Reguler</a></li>
                        <li><a class="dropdown-item" href="#">Kenaikan Pangkat Struktural</a></li>
                        <li><a class="dropdown-item" href="#">Kenaikan Pangkat Fungsional</a></li>
                        <li><a class="dropdown-item" href="#">Kenaikan Pangkat Penyesuaian Ijazah</a></li>  
                    </ul>

                  </li>
                  <li><a class="dropdown-item" href="#">Alih Tugas</a></li>


                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Pengembangan Pegawai
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="#">Ujian GI/PI/PG</a></li>
                        <li><a class="dropdown-item" href="#">Izin Belajar/Tugas Belajar</a></li>
                        <li><a class="dropdown-item" href="#">Seleksi 4 Kriteria</a></li>
                        <li><a class="dropdown-item" href="#">Diklat Kepemimpinan</a></li>  
                        <li><a class="dropdown-item" href="#">PAC</a></li>  
                    </ul>

                  </li>

                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        LHKPN
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="#">Verifikasi KPK</a></li> 
                    </ul>

                  </li> 

                  
                  <li><a class="dropdown-item" href="#">Satya Lencana</a></li>
                  <li><a class="dropdown-item" href="#">Inpassing</a></li>
                  <li><a class="dropdown-item" href="#">Penempatan Kembali Karyasiswa</a></li>
                </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Regulasi</a>
            </li>
          
            

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Informasi
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                
                <li><a class="dropdown-item" href="#">BUP</a></li> 
                <li><a class="dropdown-item" href="#">KPO</a></li> 
                <li><a class="dropdown-item" href="#">Struktural</a></li> 
              </ul>
          </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav> 
</header>

{{--  --}}