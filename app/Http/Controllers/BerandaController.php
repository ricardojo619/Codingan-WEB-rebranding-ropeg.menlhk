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
}
