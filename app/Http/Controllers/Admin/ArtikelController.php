<?php

namespace App\Http\Controllers\Admin;

use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Artikel::latest()->when(request()->q, function ($posts) {
            $posts = $posts->where('title', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.artikel.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('admin.artikel.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'title'         => 'required|unique:artikels',
            'category_id'   => 'required',
            'content'       => 'required',
        ]);
        // dd($request);
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());
        $views = 0;
        $artikel = Artikel::create([
            'image'       => $image->hashName(),
            'title'       => $request->input('title'),
            'slug'        => Str::slug($request->input('title'), '-'),
            'category_id' => $request->input('category_id'),
            'content'     => $request->input('content'),
            'views'       => $views
        ]);

        if ($artikel) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.artikel.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.artikel.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        $categories = Category::latest()->get();
        return view('admin.artikel.edit', compact('artikel', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $this->validate($request, [
            'title'         => 'required|unique:artikels,title,' . $artikel->id,
            'category_id'   => 'required',
            'content'       => 'required',
        ]);

        if ($request->file('image') == "") {

            $artikel = Artikel::findOrFail($artikel->id);
            $artikel->update([
                'title'       => $request->input('title'),
                'slug'        => Str::slug($request->input('title'), '-'),
                'category_id' => $request->input('category_id'),
                'content'     => $request->input('content'),
                'is_active'   => $request->input('is_active')
            ]);
        } else {

            //remove old image
            Storage::disk('local')->delete('public/posts/' . $artikel->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            $artikel = Artikel::findOrFail($artikel->id);
            $artikel->update([
                'image'       => $image->hashName(),
                'title'       => $request->input('title'),
                'slug'        => Str::slug($request->input('title'), '-'),
                'category_id' => $request->input('category_id'),
                'content'     => $request->input('content')
            ]);
        }


        if ($artikel) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.artikel.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.artikel.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $image = Storage::disk('local')->delete('public/posts/' . basename($artikel->image));
        $artikel->delete();

        if ($artikel) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}