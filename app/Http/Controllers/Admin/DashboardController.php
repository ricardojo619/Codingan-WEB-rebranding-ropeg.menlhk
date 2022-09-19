<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jumlahasn;
use App\Models\Jumlahppnpn;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $eselonasns = Jumlahasn::select('eselon as eselon')->pluck('eselon');
        $jumlahasns = Jumlahasn::select('jumlah as jumlah')->pluck('jumlah');
        $jumlahppnpns = Jumlahppnpn::select('jumlah as jumlah')->pluck('jumlah');
        return view('admin.dashboard.index', ['eselonasns' => $eselonasns,  'jumlahasns' => $jumlahasns, 'jumlahppnpns' => $jumlahppnpns]);
    }
}