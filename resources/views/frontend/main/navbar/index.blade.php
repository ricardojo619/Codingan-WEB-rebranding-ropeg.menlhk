<link rel="stylesheet"
    href="https://www.jqueryscript.net/demo/bootstrap-navbar-multi-level-dropdowns/css/bootnavbar.css?v2">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://www.jqueryscript.net/demo/bootstrap-navbar-multi-level-dropdowns/js/bootnavbar.js?v2"></script>
<script>
    $(document).ready(function() {
        $(function() {
            $('#main_navbar').bootnavbar();
        })
    });
</script>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-navbarr" id="main_navbar">
        <div class="container-fluid">
            {{-- <a class="navbar-brand">
     <style>
       @media (min-width: 576px) {  }

       @media (min-width: 768px) {
         .navImage{
           width: 95%;
           height: 90%;
         }
        }

       @media (min-width: 992px) {
         .navImage{
           width: 95%;height: 90%;
         }
       }

       @media (min-width: 1200px) {
         .navImage{
           width: 95%;height: 90%;
         }
       }

     </style>
     <img src="{{ asset('img/logoheadfoot.png') }}" class="navImage">
   </a> --}}
            <style>
                .navbar-brand>img {
                    display: block;
                }

                .img-responsive,
                .berita_baca>img,
                .berita_baca a>img,
                .carousel-inner>.item>img,
                .carousel-inner>.item>a>img {
                    display: block;
                    width: 100%;
                    height: auto;
                    padding: 5px 0 0 0;
                }

                .img-responsive,
                .thumbnail>img,
                .thumbnail a>img,
                .carousel-inner>.item>img,
                .carousel-inner>.item>a>img {
                    display: block;
                    max-width: 100%;
                    height: auto;
                }

                img {
                    vertical-align: middle;
                }

                @media (max-width: 767px) {
                    .visible-xs {
                        display: block !important;
                    }
                }

                .visible-xs,
                .visible-sm,
                .visible-md,
                .visible-lg {
                    display: none !important;
                }
            </style>
            <a class="navbar-brand" href="http://ropeg.menlhk.go.id/">
                <img alt="Biro Kepegawaian dan Organisasi" src="{{ asset('img/logonav.png') }}"
                    class="img-responsive hidden-xs hidden-sm">
                <img alt="Biro Kepegawaian dan Organisasi" src="http://ropeg.menlhk.go.id/assets/image/img/logo-xs.png"
                    class="img-responsive visible-xs visible-sm">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button> --}}
            {{-- id="navbarCollapse" --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mt-2 me-4 text-white">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profil-ropeg-klhk/1/" target="_blank">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/list-berita" target="_blank">Berita</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administrasi Kepegawaian
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/Pengpns">Pengangkatan PNS</a></li>
                            <li><a class="dropdown-item" href="/Karpeg">Kartu Pegawai</a></li>
                            <li><a class="dropdown-item" href="/Karissu">Kartu Istri/Suami</a></li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Alih Tugas
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="/Altuglk">Alih Tugas Lingkungan KLHK</a></li>
                                    <li><a class="dropdown-item" href="Altugpemdal">Alih Tugas dari Kementerian LHK ke
                                            PEMDA/Instansi Lain</a></li>
                                    <li><a class="dropdown-item" href="Altugpemdalk">Alih Tugas dari PEMDA/Instansi
                                            Lain ke Lingkup Kementerian LHK</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pengembangan Pegawai
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a href="/Ujdin" class="dropdown-item">Ujian Dinas</a></li>
                                    <li><a href="/Ujgi" class="dropdown-item">Ujian GI/PI/PG</a></li>
                                    <li><a href="/Izbel" class="dropdown-item">Izin Belajar/Tugas Belajar</a></li>
                                    <li><a href="/Sel4kri" class="dropdown-item">Seleksi 4 Kriteria</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Diklat Kepemimpinan
                                        </a>
                                        <ul class="dropdown-menu left" aria-labelledby="navbarDropdown2">
                                            <li><a class="dropdown-item" href="/T1">Tingkat I</a></li>
                                            <li><a class="dropdown-item" href="/T2">Tingkat II</a></li>
                                            <li><a class="dropdown-item" href="/T3">Tingkat III</a></li>
                                            <li><a class="dropdown-item" href="/T4">Tingkat IV</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/PAC" class="dropdown-item">Personal Assesment Centre (PAC)</a>
                                    </li>
                                    <li><a href="/Seljalo" class="dropdown-item">Seleksi Jabatan Lowong Pimpinan
                                            Tinggi</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    LHKPN
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <a href="/Menglhkpn" class="dropdown-item">Mengenai LHKPN</a>
                                    <a href="/Prolhkpn" class="dropdown-item">Prosedur Pelayanan LHKPN</a>
                                    <a href="/Bimtek" class="dropdown-item">Bimbingan Teknis Pengisian</a>
                                    <a href="/Forlhkpn" class="dropdown-item">Formulir LHKPN</a>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Pensiun
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <a href="/Penot" class="dropdown-item">Pensiun Otomatis (Mencapai Batas Usia
                                        Pensiun)</a>
                                    <a href="/Penjadute" class="dropdown-item">Pensiun Janda/Duda dari PNS yang
                                        Tewas</a>
                                    <a href="/Penjadumen" class="dropdown-item">Pensiun Janda/Duda dari PNS yang
                                        Meninggal Dunia</a>
                                    <a href="/Penjadupemen" class="dropdown-item">Pensiun Janda/Duda dari Pensiunan
                                        PNS YANG Meninggal Dunia</a>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Satya Lencana
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <a href="/Binjas" class="dropdown-item">Bintang Jasa</a>
                                    <a href="/Satlenpem" class="dropdown-item">Satyalancana Pembangunan</a>
                                    <a href="/Satlenkarsa" class="dropdown-item">Satyalancana Karya Satya</a>
                                    <a href="/Satlenwira" class="dropdown-item">Satyalancana Wirakarya</a>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="/Pengel">Pencantuman Gelar</a></li>
                            <li><a class="dropdown-item" href="/Ralnamnip">Ralat Nama/NIP</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan Kepegawaian
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Kenaikan Pangkat
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="/Kenpangre">Kenaikan Pangkat Reguler</a></li>
                                    <li><a class="dropdown-item" href="/Kenpangstru">Kenaikan Pangkat Struktural</a>
                                    </li>
                                    <li><a class="dropdown-item" href="/Kenpangfu">Kenaikan Pangkat Fungsional</a>
                                    </li>
                                    <li><a class="dropdown-item" href="/Kenpangpe">Kenaikan Pangkat Penyesuaian
                                            Ijazah</a></li>
                                </ul>

                            </li>
                            <li><a class="dropdown-item" href="/Altugk">Alih Tugas</a></li>


                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Pengembangan Pegawai
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="/Ujgipi">Ujian GI/PI/PG</a></li>
                                    <li><a class="dropdown-item" href="/Izbell">Izin Belajar/Tugas Belajar</a></li>
                                    <li><a class="dropdown-item" href="/Sel4krii">Seleksi 4 Kriteria</a></li>
                                    <li><a class="dropdown-item" href="/Dikpem">Diklat Kepemimpinan</a></li>
                                    <li><a class="dropdown-item" href="/Pengempac">PAC</a></li>
                                </ul>

                            </li>

                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    LHKPN
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="/Verkpk">Verifikasi KPK</a></li>
                                </ul>

                            </li>


                            <li><a class="dropdown-item" href="/Satlencana">Satya Lencana</a></li>
                            <li><a class="dropdown-item" href="/Inpassing">Inpassing</a></li>
                            <li><a class="dropdown-item" href="/Penkemkar">Penempatan Kembali Karyasiswa</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Regulasi">Regulasi</a>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    BUP 2021
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <li><a class="dropdown-item" href="/bupjanuari">Januari</a></li>
                                    <li><a class="dropdown-item" href="/bupfebruari">Februari</a></li>
                                    <li><a class="dropdown-item" href="/bupmaret">Maret</a></li>
                                    <li><a class="dropdown-item" href="/bupapril">April</a></li>
                                    <li><a class="dropdown-item" href="/bupmei">Mei</a></li>
                                    <li><a class="dropdown-item" href="/bupjuni">Juni</a></li>
                                    <li><a class="dropdown-item" href="/bupjuli">Juli</a></li>
                                    <li><a class="dropdown-item" href="/bupagustus">Agustus</a></li>
                                    <li><a class="dropdown-item" href="/bupseptember">September</a></li>
                                    <li><a class="dropdown-item" href="/bupoktober">Oktober</a></li>
                                    <li><a class="dropdown-item" href="/bupnovember">November</a></li>
                                    <li><a class="dropdown-item" href="/bupdesember">Desember</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="/KPO">KPO</a></li>
                            <li><a class="dropdown-item" href="/Struktural">Struktural</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="btncari" data-bs-toggle="modal" href="#"
                            data-bs-target="#exampleModal"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </li>
                </ul>
                {{-- <form class="d-flex">
       <input class="form-control me-1" type="search" placeholder="Pencarian" aria-label="Search">
       <button class="btn btn-outline-success" type="submit">Search</button>
     </form> --}}
                <!-- Modal -->
                <style>
                    .modal-backdrop {
                        position: inherit;
                    }
                </style>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form name="autocomplete-textbox" id="autocomplete-textbox" method="post"
                                    action="#">
                                    @csrf

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Masukkan Kata Kunci</label>
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>

                                </form>
                                {{-- <input type="text" placeholder="Masukkan Kata Kunci" class="form-control"> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</header>

{{--  --}}
