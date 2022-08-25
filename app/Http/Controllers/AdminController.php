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
        $path = public_path().'/Thumbnail/'.$request->judulBerita;
        File::makeDirectory($path, $mode = 0777, true, true);
        $request->thumbnail->move($path,$thumbnailFile);
        $berita->thumbnail=$thumbnailFile;

        $berita->date = Carbon::now()->format('d-m-Y');
        $berita->jenisBerita = $request->jenisBerita;
        $berita->isiBerita = $request->isiBerita;
        $berita->save();

        return redirect()->back()->with('message', 'Data berhasil ditambahkan!');
    }

    public function editBerita($id){
        $berita = Post::find($id);

        return view('admin.partial.crud.editBerita');
    }

    public function deletePost($id){

        $data = Post::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'User berhasil dihapus!');
    }

    public function editIsiBerita(Request $request,$id){
        $this->validate($request,[
            'id' => required,
            'judulBerita' => required,
            'thumbnail' => required,
            'jenisBerita' => required,
            'isiBerita' => required,
        ]);

        $berita = Post::findOrFail($id);

        $berita->judulBerita = $request->judulBerita;
        $berita->thumbnail = $request->thumbnail;
        $berita->jenisBerita = $request->jenisBerita;
        $berita->isiBerita = $request->isiBerita;

        $berita->save();
        
        return view('admin.form.editAccount', compact('user'));
    }
}
