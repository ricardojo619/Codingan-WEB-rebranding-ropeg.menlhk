<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Photo;
use App\Models\Galeri;
use App\Models\Profil;
use App\Models\Slider;
use App\Models\Running;
use App\Models\Category;
use App\Models\Struktur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    public function index()
    {
        $listberita = Post::select("*")
            ->where("is_active", 1)
            ->orderByDesc("created_at")
            ->take(3)->get();
        $listpengumuman = Post::select("*")
            ->where("category_id", 1)
            ->where("is_active", 1)
            ->latest()
            ->take(3)->get();
        $listevent = Post::select("*")
            ->where("category_id", 2)
            ->where("is_active", 1)
            ->latest()
            ->take(3)->get();
        $listinfolain = Post::select("*")
            ->where("category_id", 3)
            ->where("is_active", 1)
            ->latest()
            ->take(3)->get();
        $listslider = Post::select("*")
            ->where("category_id", 3)
            ->where("is_active", 1)
            ->latest()
            ->take(3)->get();
        $liststruktur   = Struktur::select("*")->where("is_active", 1)->latest()->get();
        $running        = Running::select("*")->where("is_active", 1)->latest()->get();
        $slider         = Slider::select("*")->where("is_active", 1)->latest()->get();
        $listgaleri     = Galeri::select("*")->where("is_active", 1)->latest()->get();
        $response       = Http::get('http://ropeg.menlhk.go.id/vendor/App/json_simpeg_eselon.php');
        $dataapi        = $response->json();
        return view('frontend.main', compact('dataapi', 'listgaleri', 'liststruktur', 'slider', 'running', 'listberita', 'listinfolain', 'listevent', 'listpengumuman', 'listslider'));
    }
    public function isi_slug($isi_slug)
    {
        Post::where("slug", $isi_slug)->increment('views');
        $categories = Category::latest()->get();
        $posts = Post::where("slug", $isi_slug)->where("is_active", 1)->get();
        $listpengumuman = Post::select("*")->where("category_id", 1)->where("is_active", 1)->latest()->take(3)->get();
        $listevent = Post::select("*")->where("category_id", 2)->where("is_active", 1)->latest()->take(3)->get();
        $listinfolain = Post::select("*")->where("category_id", 3)->where("is_active", 1)->latest()->take(3)->get();
        return view('frontend.main.berita.index', compact('posts', 'categories', 'listpengumuman', 'listevent', 'listinfolain'));
    }
    public function isi_struktur($isi_struktur)
    {
        Struktur::where("id", $isi_struktur)->increment('views');
        $posts = Struktur::where("id", $isi_struktur)->where("is_active", 1)->latest()->take(1)->get();
        return view('frontend.main.struktur.index', compact('posts'));
    }
    public function isi_profil($isi_profil)
    {
        Profil::where("id", $isi_profil)->increment('views');
        $posts = Profil::where("id", $isi_profil)->where("is_active", 1)->latest()->take(1)->get();
        return view('frontend.main.profil.index', compact('posts'));
    }
    public function isi_foto($isi_foto)
    {
        Galeri::where("id", $isi_foto)->increment('views');
        $galeri = Galeri::select("*")->where("id", $isi_foto)->latest()->get();
        $posts  = Photo::where("galeri_id", $isi_foto)->where("is_active", 1)->orderByDesc("created_at")->get();
        return view('frontend.main.foto.index', compact('posts', 'galeri'));
    }

    public function list_berita()
    {
        // Profil::where("id", $isi_profil)->increment('views');
        $posts = Post::latest()->paginate(3);
        return view('frontend.main.berita.listberita', compact('posts'));
    }
}