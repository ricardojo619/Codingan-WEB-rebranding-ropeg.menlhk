<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    public function beranda(){
        return view('frontend.main');
    }

    public function struktur(){
        return view('frontend.main.struktur.index');
    }

    public function profil(){
        return view('Navbar.Profil.profil');
    }

    public function berita(){
        return view('Navbar.Berita.berita');
    }

    public function pengpns(){
        return view('Navbar.Adkep.Pengpns.pengpns');
    }

    public function karpeg(){
        return view('Navbar.Adkep.Karpeg.karpeg');
    }

    public function karissu(){
        return view('Navbar.Adkep.Karissu.karissu');
    }

    public function altuglk(){
        return view('Navbar.Adkep.Altug.Altuglk.altuglk');
    }

    public function altugpemdal(){
        return view('Navbar.Adkep.Altug.Altugpemdal.altugpemdal');
    }

    public function altugpemdalk(){
        return view('Navbar.Adkep.Altug.Altugpemdalk.altugpemdalk');
    }

    public function ujdin(){
        return view('Navbar.Adkep.Pengpeg.Ujdin.ujdin');
    }

    public function ujgi(){
        return view('Navbar.Adkep.Pengpeg.Ujgi.ujgi');
    }

    public function izbel(){
        return view('Navbar.Adkep.Pengpeg.Izbel.izbel');
    }

    public function sel4kri(){
        return view('Navbar.Adkep.Pengpeg.Sel4kri.sel4kri');
    }

    public function t1(){
        return view('Navbar.Adkep.Pengpeg.Dikkep.T1.t1');
    }

    public function t2(){
        return view('Navbar.Adkep.Pengpeg.Dikkep.T2.t2');
    }

    public function t3(){
        return view('Navbar.Adkep.Pengpeg.Dikkep.T3.t3');
    }

    public function t4(){
        return view('Navbar.Adkep.Pengpeg.Dikkep.T4.t4');
    }

    public function pac(){
        return view('Navbar.Adkep.Pengpeg.PAC.pac');
    }

    public function seljalo(){
        return view('Navbar.Adkep.Pengpeg.Seljalo.seljalo');
    }

    public function menglhkpn(){
        return view('Navbar.Adkep.Lhkpn.Menglhkpn.menglhkpn');
    }

    public function prolhkpn(){
        return view('Navbar.Adkep.Lhkpn.Prolhkpn.prolhkpn');
    }

    public function bimtek(){
        return view('Navbar.Adkep.Lhkpn.Bimtek.bimtek');
    }

    public function forlhkpn(){
        return view('Navbar.Adkep.Lhkpn.Forlhkpn.forlhkpn');
    }

    public function penot(){
        return view('Navbar.Adkep.Pensiun.Penot.penot');
    }

    public function penjadute(){
        return view('Navbar.Adkep.Pensiun.Penjadute.penjadute');
    }

    public function penjadumen(){
        return view('Navbar.Adkep.Pensiun.Penjadumen.penjadumen');
    }

    public function binjas(){
        return view('Navbar.Adkep.Satlen.Binjas.binjas');
    }

    public function satlenpem(){
        return view('Navbar.Adkep.Satlen.Satlenpem.satlenpem');
    }

    public function satlenkarsa(){
        return view('Navbar.Adkep.Satlen.Satlenkarsa.satlenkarsa');
    }

    public function satlenwira(){
        return view('Navbar.Adkep.Satlen.Satlenwira.satlenwira');
    }

    public function pengel(){
        return view('Navbar.Adkep.Pengel.pengel');
    }

    public function ralnamnip(){
        return view('Navbar.Adkep.Ralnamnip.ralnamnip');
    }

    public function kenpangre(){
        return view('Navbar.Laykep.Kenpang.Kenpangre.kenpangre');
    }

    public function kenpangstru(){
        return view('Navbar.Laykep.Kenpang.Kenpangstru.kenpangstru');
    }

    public function kenpangfu(){
        return view('Navbar.Laykep.Kenpang.Kenpangfu.kengpangfu');
    }

    public function kenpangpe(){
        return view('Navbar.Laykep.Kenpang.Kenpangpe.kenpangpe');
    }

    public function altugk(){
        return view('Navbar.Laykep.Altugk.altugk');
    }

    public function ujgipi(){
        return view('Navbar.Laykep.Pengempeg.Ujgipi.ujgipi');
    }

    public function izbell(){
        return view('Navbar.Laykep.Pengempeg.Izbell.izbell');
    }

    public function sel4krii(){
        return view('Navbar.Laykep.Pengempeg.Sel4krii.sel4krii');
    }

    public function dikpem(){
        return view('Navbar.Laykep.Pengempeg.Dikpem.dikpem');
    }

    public function pengempac(){
        return view('Navbar.Laykep.Pengempeg.PengemPAC.pengempac');
    }

    public function verkpk(){
        return view('Navbar.Laykep.Lhkpnlaykep.Verkpk.verkpk');
    }

    public function satlencana(){
        return view('Navbar.Laykep.Satlencana.satlencana');
    }

    public function inpassing(){
        return view('Navbar.Laykep.Inpassing.inpassing');
    }

    public function penkemkar(){
        return view('Navbar.Laykep.Penkemkar.penkemkar');
    }

    public function regulasi(){
        return view('Navbar.Regulasi.regulasi');
    }

    public function bup(){
        return view('Navbar.Informasi.BUP.bup');
    }

    public function kpo(){
        return view('Navbar.Informasi.KPO.kpo');
    }

    public function struktural(){
        return view('Navbar.Informasi.Struktural.struktural');
    }

    //End of Navbar (Beranda)

    public function pengcpns(){
        return view('Bodyevent.Pengcpns.pengcpns');
    }

    public function simpegsapk(){
        return view('Bodyevent.Simpegsapk.simpegsapk');
    }

    public function bimtekadm(){
        return view('Bodyevent.Bimtekadm.bimtekadm');
    }

    public function btnlihse(){
        return view('Bodyevent.Btnlihse.btnlihse');
    }

    







}
