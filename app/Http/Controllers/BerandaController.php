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
        return view('Profil.profil');
    }

    public function berita(){
        return view('Berita.berita');
    }

    public function pengpns(){
        return view('Adkep.Pengpns.pengpns');
    }

    public function karpeg(){
        return view('Adkep.Karpeg.karpeg');
    }

    public function karissu(){
        return view('Adkep.Karissu.karissu');
    }

    public function altuglk(){
        return view('Adkep.Altug.Altuglk.altuglk');
    }

    public function altugpemdal(){
        return view('Adkep.Altug.Altugpemdal.altugpemdal');
    }

    public function altugpemdalk(){
        return view('Adkep.Altug.Altugpemdalk.altugpemdalk');
    }

    public function ujdin(){
        return view('Adkep.Pengpeg.Ujdin.ujdin');
    }

    public function ujgi(){
        return view('Adkep.Pengpeg.Ujgi.ujgi');
    }

    public function izbel(){
        return view('Adkep.Pengpeg.Izbel.izbel');
    }

    public function sel4kri(){
        return view('Adkep.Pengpeg.Sel4kri.sel4kri');
    }

    public function t1(){
        return view('Adkep.Pengpeg.Dikkep.T1.t1');
    }

    public function t2(){
        return view('Adkep.Pengpeg.Dikkep.T2.t2');
    }

    public function t3(){
        return view('Adkep.Pengpeg.Dikkep.T3.t3');
    }

    public function t4(){
        return view('Adkep.Pengpeg.Dikkep.T4.t4');
    }

    public function pac(){
        return view('Adkep.Pengpeg.PAC.pac');
    }

    public function seljalo(){
        return view('Adkep.Pengpeg.Seljalo.seljalo');
    }

    public function menglhkpn(){
        return view('Adkep.Lhkpn.Menglhkpn.menglhkpn');
    }

    public function prolhkpn(){
        return view('Adkep.Lhkpn.Prolhkpn.prolhkpn');
    }

    public function bimtek(){
        return view('Adkep.Lhkpn.Bimtek.bimtek');
    }

    public function forlhkpn(){
        return view('Adkep.Lhkpn.Forlhkpn.forlhkpn');
    }

    public function penot(){
        return view('Adkep.Pensiun.Penot.penot');
    }

    public function penjadute(){
        return view('Adkep.Pensiun.Penjadute.penjadute');
    }

    public function penjadumen(){
        return view('Adkep.Pensiun.Penjadumen.penjadumen');
    }

    public function binjas(){
        return view('Adkep.Satlen.Binjas.binjas');
    }

    public function satlenpem(){
        return view('Adkep.Satlen.Satlenpem.satlenpem');
    }

    public function satlenkarsa(){
        return view('Adkep.Satlen.Satlenkarsa.satlenkarsa');
    }

    public function satlenwira(){
        return view('Adkep.Satlen.Satlenwira.satlenwira');
    }

    public function pengel(){
        return view('Adkep.Pengel.pengel');
    }

    public function ralnamnip(){
        return view('Adkep.Ralnamnip.ralnamnip');
    }

    public function kenpangre(){
        return view('Laykep.Kenpang.Kenpangre.kenpangre');
    }

    public function kenpangstru(){
        return view('Laykep.Kenpang.Kenpangstru.kenpangstru');
    }

    public function kenpangfu(){
        return view('Laykep.Kenpang.Kenpangfu.kengpangfu');
    }

    public function kenpangpe(){
        return view('Laykep.Kenpang.Kenpangpe.kenpangpe');
    }

    public function altugk(){
        return view('Laykep.Altugk.altugk');
    }

    public function ujgipi(){
        return view('Laykep.Pengempeg.Ujgipi.ujgipi');
    }

    public function izbell(){
        return view('Laykep.Pengempeg.Izbell.izbell');
    }

    public function sel4krii(){
        return view('Laykep.Pengempeg.Sel4krii.sel4krii');
    }

    public function dikpem(){
        return view('Laykep.Pengempeg.Dikpem.dikpem');
    }

    public function pengempac(){
        return view('Laykep.Pengempeg.PengemPAC.pengempac');
    }

    public function verkpk(){
        return view('Laykep.Lhkpnlaykep.Verkpk.verkpk');
    }

    public function satlencana(){
        return view('Laykep.Satlencana.satlencana');
    }

    public function inpassing(){
        return view('Laykep.Inpassing.inpassing');
    }

    public function penkemkar(){
        return view('Laykep.Penkemkar.penkemkar');
    }

    public function regulasi(){
        return view('Regulasi.regulasi');
    }

    public function bup(){
        return view('Informasi.BUP.bup');
    }

    public function kpo(){
        return view('Informasi.KPO.kpo');
    }

    public function struktural(){
        return view('Informasi.Struktural.struktural');
    }

    //End of Controller NAVBAR(Beranda)//

    







}
