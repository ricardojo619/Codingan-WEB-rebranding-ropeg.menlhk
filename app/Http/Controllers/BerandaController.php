<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\RunText;

class BerandaController extends Controller
{
    //
    //     public function beranda(){
    //         $berita = Post::orderByDesc('id')->get();
    //         $pengumuman = Post::orderByDesc('id')->where('jenisBerita', 'Pengumuman')->get();
    //         $event = Post::orderByDesc('id')->where('jenisBerita', 'Event')->get();
    //         $infolain = Post::orderByDesc('id')->where('jenisBerita', 'Info Lain')->get();
    //         $runText = Runtext::orderByDesc('id')->get();

    //         $data = ['title' => 'Beranda - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.main', $data)
    //         ->with('berita', $berita)
    //         ->with('pengumuman', $pengumuman)
    //         ->with('event', $event)
    //         ->with('infolain', $infolain)
    //         ->with('runText', $runText);
    //     }

    //     public function struktur(){
    //         $data = ['title' => 'Struktur Organisasi - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.main.struktur.index', $data);
    //     }

    //     public function detailberita(){
    //         $data = ['title' => 'Berita - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.main.berita.detail', $data);
    //     }

    //     public function profil(){
    //         $data = ['title' => 'Profil - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.main.profil.index', $data);
    //     }

    //     public function berita(){
    //         $data = ['title' => 'Berita - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Berita.berita', $data);
    //     }

    //     public function pengpns(){
    //         $data = ['title' => 'Pengangkatan PNS - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pengpns.pengpns', $data);
    //     }

    //     public function karpeg(){
    //         $data = ['title' => 'Kartu Pegawai - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Karpeg.karpeg', $data);
    //     }

    //     public function karissu(){
    //         $data = ['title' => 'Kartu Istri/Suami - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Karissu.karissu', $data);
    //     }

    //     public function altuglk(){
    //         $data = ['title' => 'Alih Tugas Lingkungan KLHK - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.altug.Altuglk.altuglk', $data);
    //     }

    //     public function altugpemdal(){
    //         $data = ['title' => 'Alih Tugas dari KLHK ke PEMDA/Instansi Lain - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.altug.Altugpemdal.altugpemdal', $data);
    //     }

    //     public function altugpemdalk(){
    //         $data = ['title' => 'Alih Tugas dari PEMDA/Instansi Lain ke Lingkup KLHK - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.altug.Altugpemdalk.altugpemdalk', $data);
    //     }

    //     public function ujdin(){
    //         $data = ['title' => 'Ujian Dinas - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pengpeg.Ujdin.ujdin', $data);
    //     }

    //     public function ujgi(){
    //         $data = ['title' => 'Ujian GI/PI/PG - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pengpeg.Ujgi.ujgi', $data);
    //     }

    //     public function izbel(){
    //         $data = ['title' => 'Izin Belajar - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pengpeg.Izbel.izbel', $data);
    //     }

    //     public function sel4kri(){
    //         $data = ['title' => 'Seleksi 4 Kriteria - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pengpeg.Sel4kri.sel4kri', $data);
    //     }

    //     public function t1(){
    //         $data = ['title' => 'Diklat Tingkat I - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pengpeg.Dikkep.T1.t1', $data);
    //     }

    //     public function t2(){
    //         $data = ['title' => 'Diklat Tingkat II - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pengpeg.Dikkep.T2.t2', $data);
    //     }

    //     public function t3(){
    //         $data = ['title' => 'Diklat Tingkat III - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pengpeg.Dikkep.T3.t3', $data);
    //     }

    //     public function t4(){
    //         $data = ['title' => 'Diklat Tingkat IV - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pengpeg.Dikkep.T4.t4', $data);
    //     }

    //     public function pac(){
    //         $data = ['title' => 'Personal Assesment Center (PAC) - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pengpeg.PAC.pac', $data);
    //     }

    //     public function seljalo(){
    //         $data = ['title' => 'Seleksi Jabatan Lowong Pimpinan Tinggi - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pengpeg.Seljalo.seljalo', $data);
    //     }

    //     public function menglhkpn(){
    //         $data = ['title' => 'Mengenai LHKPN - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Lhkpn.Menglhkpn.menglhkpn', $data);
    //     }

    //     public function prolhkpn(){
    //         $data = ['title' => 'Prosedur Pelayanan LHKPN - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Lhkpn.Prolhkpn.prolhkpn', $data);
    //     }

    //     public function bimtek(){
    //         $data = ['title' => 'Bimbingan Teknis Pengisian LHKPN - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Lhkpn.Bimtek.bimtek', $data);
    //     }

    //     public function forlhkpn(){
    //         $data = ['title' => 'Formulir LHKPN - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Lhkpn.Forlhkpn.forlhkpn', $data);
    //     }

    //     public function penot(){
    //         $data = ['title' => 'Pensiun Otomatis - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pensiun.Penot.penot', $data);
    //     }

    //     public function penjadute(){
    //         $data = ['title' => 'Pensiun Janda/Duda dari PNS yang Tewas - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pensiun.Penjadute.penjadute', $data);
    //     }

    //     public function penjadumen(){
    //         $data = ['title' => 'Pensiun Janda/Duda dari PNS yang Meninggal Dunia - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pensiun.Penjadumen.penjadumen', $data);
    //     }

    //     public function penjadupemen(){
    //         $data = ['title' => 'Pensiun Janda/Duda dari Pensiunan PNS yang Meninggal Dunia - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pensiun.Penjadupemen.penjadupemen', $data);
    //     }

    //     public function binjas(){
    //         $data = ['title' => 'Bintang Jasa - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Satlen.Binjas.binjas', $data);
    //     }

    //     public function satlenpem(){
    //         $data = ['title' => 'Satya Lencana Pembangunan - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Satlen.Satlenpem.satlenpem', $data);
    //     }

    //     public function satlenkarsa(){
    //         $data = ['title' => 'Satya Lencana Karya Satya - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Satlen.Satlenkarsa.satlenkarsa', $data);
    //     }

    //     public function satlenwira(){
    //         $data = ['title' => 'Satya Lencana Wira Satya - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Satlen.Satlenwira.satlenwira', $data);
    //     }

    //     public function pengel(){
    //         $data = ['title' => 'Pencantuman Gelar - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Pengel.pengel', $data);
    //     }

    //     public function ralnamnip(){
    //         $data = ['title' => 'Ralat Nama/NIP - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Adkep.Ralnamnip.ralnamnip', $data);
    //     }

    //     public function kenpangre(){
    //         $data = ['title' => 'Kenaikan Pangkat Reguler - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Laykep.Kenpang.Kenpangre.kenpangre', $data);
    //     }

    //     public function kenpangstru(){
    //         $data = ['title' => 'Kenaikan Pangkat Struktural - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Laykep.Kenpang.Kenpangstru.kenpangstru', $data);
    //     }

    //     public function kenpangfu(){
    //         $data = ['title' => 'Kenaikan Pangkat Fungsional - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Laykep.Kenpang.Kenpangfu.kengpangfu', $data);
    //     }

    //     public function kenpangpe(){
    //         $data = ['title' => 'Kenaikan Pangkat Penyesuaian - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Laykep.Kenpang.Kenpangpe.kenpangpe', $data);
    //     }

    //     public function altugk(){
    //         $data = ['title' => 'Alih Tugas - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Laykep.Altugk.altugk', $data);
    //     }

    //     public function ujgipi(){
    //         $data = ['title' => 'Ujian GI/PI/PG - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Laykep.Pengempeg.Ujgipi.ujgipi', $data);

    //     }

    //     public function izbell(){
    //         $data = ['title' => 'Izin Belajar - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Laykep.Pengempeg.Izbell.izbell', $data);
    //     }

    //     public function sel4krii(){
    //         $data = ['title' => 'Seleksi 4 Kriteria - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Laykep.Pengempeg.Sel4krii.sel4krii', $data);
    //     }

    //     public function dikpem(){
    //         $data = ['title' => 'Diklat Kepemimpinan - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Laykep.Pengempeg.Dikpem.dikpem', $data);
    //     }

    //     public function pengempac(){
    //         $data = ['title' => 'Personal Assesment Center - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Laykep.Pengempeg.PengemPAC.pengempac', $data);
    //     }

    //     public function verkpk(){
    //         $data = ['title' => 'Verifikasi KPK - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Laykep.Lhkpnlaykep.Verkpk.verkpk', $data);
    //     }

    //     public function satlencana(){
    //         $data = ['title' => 'Satya Lencana - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Laykep.Satlencana.satlencana', $data);
    //     }

    //     public function inpassing(){
    //         $data = ['title' => 'Inpassing - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Laykep.Inpassing.inpassing', $data);
    //     }

    //     public function penkemkar(){
    //         $data = ['title' => 'Penempatan Kembali Karyasiswa - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Laykep.Penkemkar.penkemkar', $data);
    //     }

    //     public function regulasi(){
    //         $data = ['title' => 'Regulasi - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Regulasi.regulasi', $data);
    //     }

    //     public function bup(){
    //         $data = ['title' => 'BUP 2021 - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.BUP.bup', $data);
    //     }

    //     public function kpo(){
    //         $data = ['title' => 'KPO - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.KPO.kpo', $data);
    //     }

    //     public function struktural(){
    //         $data = ['title' => 'Struktural - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.Struktural.struktural', $data);
    //     }

    //     //End of Navbar (Beranda)

    //     public function pengcpns(){
    //         $data = ['title' => ' Pengadaan CPNS 2022 - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('Bodyevent.Pengcpns.pengcpns', $data);
    //     }

    //     public function simpegsapk(){
    //         $data = ['title' => ' Sosialisasi SIMPEG dan MySAPK 2022 - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('Bodyevent.Simpegsapk.simpegsapk', $data);
    //     }

    //     public function bimtekadm(){
    //         $data = ['title' => ' Bimbingan Teknis Pengelola Adm - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('Bodyevent.Bimtekadm.bimtekadm', $data);
    //     }

    //     public function btnlihse(){
    //         return view('Bodyevent.Btnlihse.btnlihse');
    //     }

    //     //End of Event(Info Lain)//

    //     public function selterjpt(){
    //         $data = ['title' => ' Seleksi Terbuka Pengisian JPT di Lingkungan Sekretariat Jenderal DPR RI - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('Bodyinfoter.Selterjpt.selterjpt', $data);
    //     }

    //     public function pengskdcpns(){
    //         $data = ['title' => ' Pengumuman SKD CPNS 2022 - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('Bodyinfoter.Pengskdcpns.pengskdcpns', $data);
    //     }

    //     public function sosmysapk(){
    //         $data = ['title' => ' Sosialisasi SIMPEG dan MySAPK 2022 - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('Bodyinfoter.Sosmysapk.sosmysapk', $data);
    //     }


    // // Isi BUP
    //     public function bupjanuari(){
    //         $data = ['title' => ' BUP Januari - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.BUP.bupjanuari', $data);
    //     }
    //     public function bupfebruari(){
    //         $data = ['title' => ' BUP Februari - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.BUP.bupfebruari', $data);
    //     }
    //     public function bupmaret(){
    //         $data = ['title' => ' BUP Maret - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.BUP.bupmaret', $data);
    //     }
    //     public function bupapril(){
    //         $data = ['title' => ' BUP April - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.BUP.bupapril', $data);
    //     }
    //     public function bupmei(){
    //         $data = ['title' => ' BUP Mei - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.BUP.bupmei', $data);
    //     }
    //     public function bupjuni(){
    //         $data = ['title' => ' BUP Juni - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.BUP.bupjuni', $data);
    //     }
    //     public function bupjuli(){
    //         $data = ['title' => ' BUP Juli - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.BUP.bupjuli', $data);
    //     }
    //     public function bupagustus(){
    //         $data = ['title' => ' BUP Agustus - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.BUP.bupagustus', $data);
    //     }
    //     public function bupseptember(){
    //         $data = ['title' => ' BUP September - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.BUP.bupseptember', $data);
    //     }
    //     public function bupoktober(){
    //         $data = ['title' => ' BUP Oktober - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.BUP.bupoktober', $data);
    //     }
    //     public function bupnovember(){
    //         $data = ['title' => ' BUP November - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.BUP.bupnovember', $data);
    //     }
    //     public function bupdesember(){
    //         $data = ['title' => ' BUP Desember - Biro Kepegawaian dan Organisasi KLHK'];
    //         return view('frontend.Navbar.Informasi.BUP.bupdesember', $data);
    //     }





}