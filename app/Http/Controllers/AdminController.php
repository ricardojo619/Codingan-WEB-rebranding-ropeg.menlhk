<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\Runtext;
use File;

class AdminController extends Controller
{
    public function adminBerita(){
        $listBerita = Post::get();
        return view('admin.berita', compact('listBerita'));
    }

    public function adminRuntext(){

        $listRuntext = Runtext::get();
        return view('admin.runningText', compact('listRuntext'));
    }

    public function tambahRuntext(Request $request){
        $runtext = new Runtext;
        $runtext->id = $request->id;
        $runtext->isiText = $request->isiText;
        $runtext->save();

        return redirect()->back()->with('Add', 'Running Text berhasil ditambahkan!');
    }

    public function editRuntext($id){
        $runtext = Runtext::find($id);

        return view('admin.partial.crud.editRunningtext', compact('runtext'));
    }

    public function updateRuntext(Request $request, $id){
        $runtext = Runtext::find($id);
        $runtext->isiText = $request->isiText;
        $runtext->update();

        return redirect('/adminRuntext')->with('Edit', 'Running Text berhasil diedit!');
    }

    public function deleteRuntext($id){

        $data = Runtext::find($id);
        $data->delete();
        return redirect()->back()->with('Delete', 'Running Text berhasil dihapus!');
    }

    public function tambahBerita(Request $request){

        $berita = new Post;

        $berita->id = $request->id;
        $berita->judulBerita = $request->judulBerita;
        $thumbnail = $request->thumbnail;
        $thumbnailFile = $request->judulBerita.'.'.$thumbnail->getClientoriginalExtension();
        $path = public_path().'/Gambar Berita';
        File::makeDirectory($path, $mode = 0777, true, true);
        $request->thumbnail->move($path,$thumbnailFile);
        $berita->thumbnail=$thumbnailFile;

        $berita->date = Carbon::now()->format('l d m Y');
        $berita->jenisBerita = $request->jenisBerita;
        $berita->isiBerita = $request->isiBerita;
        $berita->save();

        return redirect()->back()->with('Add', 'Berita berhasil ditambahkan!');
    }


    public function editBerita($id){
        $berita = Post::find($id);

        return view('admin.partial.crud.editBerita', compact('berita'));
    }

    public function deletePost($id){

        $data = Post::find($id);
        $data->delete();
        return redirect()->back()->with('Delete', 'Berita berhasil dihapus!');
    }

    public function editIsiBerita(Request $request,$id){


        $berita = Post::findOrFail($id);

        $berita->judulBerita = $request->judulBerita;
        $thumbnail = $request->thumbnail;
        $thumbnailFile = $request->judulBerita.'.'.$thumbnail->getClientoriginalExtension();
        $path = public_path().'/Gambar Berita';
        File::makeDirectory($path, $mode = 0777, true, true);
        $request->thumbnail->move($path,$thumbnailFile);
        $berita->thumbnail=$thumbnailFile;
        $berita->jenisBerita = $request->jenisBerita;
        $berita->isiBerita = $request->isiBerita;

        $berita->save();

        return redirect('/adminBerita')->with('Edit', 'Berita berhasil diubah');
    }
}
