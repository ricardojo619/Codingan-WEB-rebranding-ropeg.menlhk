<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Post;
use File;

class AdminController extends Controller
{
    public function adminBerita(){
        $listBerita = Post::get();
        return view('admin.berita', compact('listBerita'));
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
