
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/logoropegklhk.png') }}" alt="" style="width: 50%;height: 50%">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mx-auto mb-2 mt-2 me-4">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url("/Profil") }}">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url("/Berita") }}">Berita</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Administrasi Kepegawaian
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url("/Pengpns") }}">Pengangkatan PNS</a></li>
                  <li><a class="dropdown-item" href="{{ url("/Karpeg") }}">Kartu Pegawai</a></li>
                  <li><a class="dropdown-item" href="{{ url("/Karissu") }}">Kartu Istri/Suami</a></li> 
                  {{--  --}}
                  <li class="dropdown-submenu">
                    <a href="#" class="dropdown-item" data-toggle="dropdown">Alih Tugas</a>
                    <ul class="dropdown-menu"> 
                        <li><a href="{{ url("/Altuglk") }}" class="dropdown-item" data-toggle="dropdown">Alih Tugas Lingkungan KLHK</a></li>
                        <li><a href="{{ url("/Altugpemdal") }}" class="dropdown-item" data-toggle="dropdown">Alih Tugas dari Kementerian LHK ke PEMDA/Instansi Lain</a></li>
                        <li><a href="{{ url("/Altugpemdalk") }}" class="dropdown-item" data-toggle="dropdown">Alih Tugas dari PEMDA/Instansi Lain ke Lingkup Kementerian LHK</a></li>
                    </ul>
                  </li> 
                  {{--  --}}
                  {{--  --}}
                  <li class="dropdown-submenu">
                    <a href="#" class="dropdown-item" data-toggle="dropdown">Pengembangan Pegawai</a>
                    <ul class="dropdown-menu"> 
                        <li><a href="{{ url("/Ujdin") }}" class="dropdown-item" data-toggle="dropdown">Ujian Dinas</a></li>
                        <li><a href="{{ url("/Ujgi") }}" class="dropdown-item" data-toggle="dropdown">Ujian GI/PI/PG</a></li>
                        <li><a href="{{ url("/Izbel") }}" class="dropdown-item" data-toggle="dropdown">Izin Belajar/Tugas Belajar</a></li>
                        <li><a href="{{ url("/Sel4kri") }}" class="dropdown-item" data-toggle="dropdown">Seleksi 4 Kriteria</a></li>
                        <li><a href="{{ url("/PAC") }}" class="dropdown-item" data-toggle="dropdown">Personal Assesment Centre (PAC)</a></li>
                        <li><a href="{{ url("/Seljalo") }}" class="dropdown-item" data-toggle="dropdown">Seleksi Jabatan Lowong Pimpinan Tinggi</a></li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-item" data-toggle="dropdown">Diklat Kepemimpinan</a>
                            <ul class="dropdown-menu">
                                <li class="">
                                    <a href="#" class="dropdown-item" data-toggle="dropdown">Tingkat I</a>
                                    <a href="#" class="dropdown-item" data-toggle="dropdown">Tingkat II</a> 
                                    <a href="#" class="dropdown-item" data-toggle="dropdown">Tingkat III</a>
                                    <a href="#" class="dropdown-item" data-toggle="dropdown">Tingkat IV</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                  </li> 
                  {{--  --}}
                  {{-- <li><a class="dropdown-item" href="#">Pengembangan Pegawai</a></li> --}}
                  <li class="dropdown-submenu">
                    <a href="#" class="dropdown-item" data-toggle="dropdown">LHKPN</a>
                    <ul class="dropdown-menu">
                        <li class="">
                            <a href="{{ url("/Menglhkpn") }}" class="dropdown-item" data-toggle="dropdown">Mengenai LHKPN</a>
                            <a href="{{ url("/Prolhkpn") }}" class="dropdown-item" data-toggle="dropdown">Prosedur Pelayanan LHKPN</a> 
                            <a href="{{ url("/Bimtek") }}" class="dropdown-item" data-toggle="dropdown">Bimbingan Teknis Pengisian</a>
                            <a href="{{ url("/Forlhkpn") }}" class="dropdown-item" data-toggle="dropdown">Formulir LHKPN</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                  <a href="#" class="dropdown-item" data-toggle="dropdown">Pensiun</a>
                  <ul class="dropdown-menu">
                      <li class="">
                          <a href="{{ url("/Penot") }}" class="dropdown-item" data-toggle="dropdown">Pensiun Otomatis (Mencapai Batas Usia Pensiun)</a>
                          <a href="{{ url("/Penjadute") }}" class="dropdown-item" data-toggle="dropdown">Pensiun Janda/Duda dari PNS yang Tewas</a> 
                          <a href="{{ url("/Penjadumen") }}" class="dropdown-item" data-toggle="dropdown">Pensiun Janda/Duda dari PNS yang Meninggal Dunia</a>
                          <a href="{{ url("/Penjadupemen") }}" class="dropdown-item" data-toggle="dropdown">Pensiun Janda/Duda dari Pensiunan PNS YANG Meninggal Dunia</a>
                      </li>
                  </ul>
                 </li>
                 <li class="dropdown-submenu">
                  <a href="#" class="dropdown-item" data-toggle="dropdown">Satya Lencana</a>
                  <ul class="dropdown-menu">
                      <li class="">
                          <a href="{{ url("/Binjas") }}" class="dropdown-item" data-toggle="dropdown">Bintang Jasa</a>
                          <a href="{{ url("/Satlenpem") }}" class="dropdown-item" data-toggle="dropdown">Satyalancana Pembangunan</a> 
                          <a href="{{ url("/Satlenkarsa") }}" class="dropdown-item" data-toggle="dropdown">Satyalancana Karya Satya</a>
                          <a href="{{ url("/Satlenwira") }}" class="dropdown-item" data-toggle="dropdown">Satyalancana Wirakarya</a>
                      </li>
                  </ul>
                 </li>
                  <li><a class="dropdown-item" href="{{ url("/Pengel") }}">Pencantuman Gelar</a></li>
                  <li><a class="dropdown-item" href="{{ url("/Ralnamnip") }}">Ralat Nama/NIP</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Layanan Kepegawaian
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li class="dropdown-submenu">
                    <a href="#" class="dropdown-item" data-toggle="dropdown">Kenaikan Pangkat</a>
                    <ul class="dropdown-menu">
                        <li class="">
                            <a href="#" class="dropdown-item" data-toggle="dropdown">Kenaikan Pangkat Reguler</a>
                            <a href="#" class="dropdown-item" data-toggle="dropdown">Kenaikan Pangkat Struktural</a> 
                            <a href="#" class="dropdown-item" data-toggle="dropdown">Kenaikan Fungsional</a>
                            <a href="#" class="dropdown-item" data-toggle="dropdown">Kenaikan Penyesuaian Ijazah</a>
                        </li>
                    </ul>
                   </li>
                  <li><a class="dropdown-item" href="#">Alih Tugas</a></li>
                  <li class="dropdown-submenu">
                    <a href="#" class="dropdown-item" data-toggle="dropdown">Pengembangan Pegawai</a>
                    <ul class="dropdown-menu">
                        <li class="">
                            <a href="#" class="dropdown-item" data-toggle="dropdown">Ujian GI/PI/PG</a>
                            <a href="#" class="dropdown-item" data-toggle="dropdown">Izin Belajar/Tugas Belajar</a> 
                            <a href="#" class="dropdown-item" data-toggle="dropdown">Seleksi 4 Kriteria</a>
                            <a href="#" class="dropdown-item" data-toggle="dropdown">Diklat Kepemimpinan</a>
                            <a href="#" class="dropdown-item" data-toggle="dropdown">PAC</a>
                        </li>
                    </ul>
                   </li>
                   <li class="dropdown-submenu">
                    <a href="#" class="dropdown-item" data-toggle="dropdown">LHKPN</a>
                    <ul class="dropdown-menu">
                        <li class="">
                            <a href="#" class="dropdown-item" data-toggle="dropdown">Verifikasi KPK</a>
                        </li>
                    </ul>
                   </li>
                  <li><a class="dropdown-item" href="#">Satya Lencana</a></li>
                  <li><a class="dropdown-item" href="#">Inpassing</a></li>
                  <li><a class="dropdown-item" href="#">Penempatan Kembali Karyasiswa</a></li>
                </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url("/Regulasi") }}">Regulasi</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Informasi
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">BUP 2021</a></li>
                  <li><a class="dropdown-item" href="#">KPO 2020</a></li>
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
