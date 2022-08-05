
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/logo_ropeg_klhk.png') }}" alt="" style="width: 50%;height: 50%">
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
              <a class="nav-link" href="#">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Berita</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Administrasi Kepegawaian
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Pengangkatan PNS</a></li>
                  <li><a class="dropdown-item" href="#">Kartu Pegawai</a></li>
                  <li><a class="dropdown-item" href="#">Kartu Istri/Suami</a></li>
                  {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Alih Tugas
                    </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Alih Tugas KLHLK</a></li>
                      </ul> 
                  </li> --}}
                  <li class="nav-item dropdown">
                      <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Alih Tugas
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="#">Alih Tugas Lingkungan KLHK</a></li>
                        <li><a class="dropdown-item" href="#">Alih Tugas dari Kementerian LHK ke PEMDA/Instansi Lain</a></li>
                        <li></li><a class="dropdown-item" href="#">Alih Tugas dari PEMDA/Instansi Lain ke Lingkup Kementerian LHK </a> 
                  </li>
                        <li class="nav-item dropdown">
                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                            Left Dropdown
                          </a>
                          <ul class="dropdown-menu left" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <div class="dropdown-divider"></div>
                            <li></li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  </li>
                  <li><a class="dropdown-item" href="#">Pengembangan Pegawai</a></li>
                  <li><a class="dropdown-item" href="#">LHKPN</a></li>
                  <li><a class="dropdown-item" href="#">Pensiun</a></li>
                  <li><a class="dropdown-item" href="#">Satya Lencana</a></li>
                  <li><a class="dropdown-item" href="#">Pencantuman Gelar</a></li>
                  <li><a class="dropdown-item" href="#">Ralat Nama/NIP</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Layanan Kepegawaian
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Kenaikan Pangkat</a></li>
                  <li><a class="dropdown-item" href="#">Alih Tugas</a></li>
                  <li><a class="dropdown-item" href="#">Pengembangan Pegawai</a></li>
                  <li><a class="dropdown-item" href="#">LHKPN</a></li>
                  <li><a class="dropdown-item" href="#">Satya Lencana</a></li>
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
