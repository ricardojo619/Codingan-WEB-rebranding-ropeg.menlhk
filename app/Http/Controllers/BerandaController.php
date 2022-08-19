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
        // return view('Navbar.Profil.profil');
        return view('frontend.main.profil.index');
    }

    public function berita(){
        return view('frontend.Navbar.Berita.berita');
    }

    public function pengpns(){
        return view('frontend.Navbar.Adkep.Pengpns.pengpns');
    }

    public function karpeg(){
        return view('frontend.Navbar.Adkep.Karpeg.karpeg');
    }

    public function karissu(){
        return view('frontend.Navbar.Adkep.Karissu.karissu');
    }

    public function altuglk(){
        return view('frontend.Navbar.Adkep.altug.Altuglk.altuglk');
    }

    public function altugpemdal(){
        return view('frontend.Navbar.Adkep.altug.Altugpemdal.altugpemdal');
    }

    public function altugpemdalk(){
        return view('frontend.Navbar.Adkep.altug.Altugpemdalk.altugpemdalk');
    }

    public function ujdin(){
        return view('frontend.Navbar.Adkep.Pengpeg.Ujdin.ujdin');
    }

    public function ujgi(){
        return view('frontend.Navbar.Adkep.Pengpeg.Ujgi.ujgi');
    }

    public function izbel(){
        return view('frontend.Navbar.Adkep.Pengpeg.Izbel.izbel');
    }

    public function sel4kri(){
        return view('frontend.Navbar.Adkep.Pengpeg.Sel4kri.sel4kri');
    }

    public function t1(){
        return view('frontend.Navbar.Adkep.Pengpeg.Dikkep.T1.t1');
    }

    public function t2(){
        return view('frontend.Navbar.Adkep.Pengpeg.Dikkep.T2.t2');
    }

    public function t3(){
        return view('frontend.Navbar.Adkep.Pengpeg.Dikkep.T3.t3');
    }

    public function t4(){
        return view('frontend.Navbar.Adkep.Pengpeg.Dikkep.T4.t4');
    }

    public function pac(){
        return view('frontend.Navbar.Adkep.Pengpeg.PAC.pac');
    }

    public function seljalo(){
        return view('frontend.Navbar.Adkep.Pengpeg.Seljalo.seljalo');
    }

    public function menglhkpn(){
        return view('frontend.Navbar.Adkep.Lhkpn.Menglhkpn.menglhkpn');
    }

    public function prolhkpn(){
        return view('frontend.Navbar.Adkep.Lhkpn.Prolhkpn.prolhkpn');
    }

    public function bimtek(){
        return view('frontend.Navbar.Adkep.Lhkpn.Bimtek.bimtek');
    }

    public function forlhkpn(){
        return view('frontend.Navbar.Adkep.Lhkpn.Forlhkpn.forlhkpn');
    }

    public function penot(){
        return view('frontend.Navbar.Adkep.Pensiun.Penot.penot');
    }

    public function penjadute(){
        return view('frontend.Navbar.Adkep.Pensiun.Penjadute.penjadute');
    }

    public function penjadumen(){
        return view('frontend.Navbar.Adkep.Pensiun.Penjadumen.penjadumen');
    }

    public function penjadupemen(){
        return view('Navbar.Adkep.Pensiun.Penjadupemen.penjadupemen');
    }

    public function binjas(){
        return view('frontend.Navbar.Adkep.Satlen.Binjas.binjas');
    }

    public function satlenpem(){
        return view('frontend.Navbar.Adkep.Satlen.Satlenpem.satlenpem');
    }

    public function satlenkarsa(){
        return view('frontend.Navbar.Adkep.Satlen.Satlenkarsa.satlenkarsa');
    }

    public function satlenwira(){
        return view('frontend.Navbar.Adkep.Satlen.Satlenwira.satlenwira');
    }

    public function pengel(){
        return view('frontend.Navbar.Adkep.Pengel.pengel');
    }

    public function ralnamnip(){
        return view('frontend.Navbar.Adkep.Ralnamnip.ralnamnip');
    }

    public function kenpangre(){
        return view('frontend.Navbar.Laykep.Kenpang.Kenpangre.kenpangre');
    }

    public function kenpangstru(){
        return view('frontend.Navbar.Laykep.Kenpang.Kenpangstru.kenpangstru');
    }

    public function kenpangfu(){
        return view('frontend.Navbar.Laykep.Kenpang.Kenpangfu.kengpangfu');
    }

    public function kenpangpe(){
        return view('frontend.Navbar.Laykep.Kenpang.Kenpangpe.kenpangpe');
    }

    public function altugk(){
        return view('frontend.Navbar.Laykep.Altugk.altugk');
    }

    public function ujgipi(){
        return view('frontend.Navbar.Laykep.Pengempeg.Ujgipi.ujgipi');
    }

    public function izbell(){
        return view('frontend.Navbar.Laykep.Pengempeg.Izbell.izbell');
    }

    public function sel4krii(){
        return view('frontend.Navbar.Laykep.Pengempeg.Sel4krii.sel4krii');
    }

    public function dikpem(){
        return view('frontend.Navbar.Laykep.Pengempeg.Dikpem.dikpem');
    }

    public function pengempac(){
        return view('frontend.Navbar.Laykep.Pengempeg.PengemPAC.pengempac');
    }

    public function verkpk(){
        return view('frontend.Navbar.Laykep.Lhkpnlaykep.Verkpk.verkpk');
    }

    public function satlencana(){
        return view('frontend.Navbar.Laykep.Satlencana.satlencana');
    }

    public function inpassing(){
        return view('frontend.Navbar.Laykep.Inpassing.inpassing');
    }

    public function penkemkar(){
        return view('frontend.Navbar.Laykep.Penkemkar.penkemkar');
    }

    public function regulasi(){
        return view('frontend.Navbar.Regulasi.regulasi');
    }

    public function bup(){
        return view('frontend.Navbar.Informasi.BUP.bup');
    }

    public function kpo(){
        return view('frontend.Navbar.Informasi.KPO.kpo');
    }

    public function struktural(){
        return view('frontend.Navbar.Informasi.Struktural.struktural');
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

    //End of Event(Info Lain)//

    public function selterjpt(){
        return view('Bodyinfoter.Selterjpt.selterjpt');
    }

    public function pengskdcpns(){
        return view('Bodyinfoter.Pengskdcpns.pengskdcpns');
    }

    public function sosmysapk(){
        return view('Bodyinfoter.Sosmysapk.sosmysapk');
    }
    







}
