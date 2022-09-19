<?php

namespace App\Http\Controllers\Admin;

use App\Models\Photo;
use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $galeris = Galeri::latest()->get();
        $photos = Photo::latest()->when(request()->q, function ($photos) {
            $photos = $photos->where('title', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.photo.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galeris = Galeri::latest()->get();
        return view('admin.photo.create', compact('galeris'));
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
            'image'     => 'required|image',
            'title'     => 'required|unique:photos',
            'galeri_id' => 'required',
        ]);
        // dd($request);
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/photos', $image->hashName());
        $views = 0;
        $photo = Photo::create([
            'image'     => $image->hashName(),
            'title'     => $request->input('title'),
            'galeri_id' => $request->input('galeri_id')
        ]);

        if ($photo) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.photo.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.photo.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Photo $photo)
    {
        $galeris = Galeri::latest()->get();
        return view('admin.photo.edit', compact('photo', 'galeris'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // public function update(Request $request, Slider $slider, $id)
    public function update(Request $request, Photo $photo)
    {
        $photos = Photo::findOrFail($photo->id);
        $this->validate($request, [
            'title'     => 'required|unique:sliders,title,' . $photos->id
            // 'image'     => 'required|image'
        ]);
        if ($request->file('image') == "") {
            $photo = Photo::findOrFail($photos->id);
            $photo->update([
                'title'       => $request->input('title'),
                'is_active'   => $request->input('is_active'),
                'galeri_id'   => $request->input('galeri_id')
            ]);
        } else {
            //remove old image
            $photo = Photo::findOrFail($photos->id);

            $image = Storage::disk('local')->delete('public/photos/' . basename($photo->image));
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/photos', $image->hashName());

            $photo->update([
                'image'       => $image->hashName(),
                'title'       => $request->input('title'),
                'is_active'   => $request->input('is_active'),
                'galeri_id'   => $request->input('galeri_id')
            ]);
        }


        if ($photo) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.photo.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.photo.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $photo = Photo::findOrFail($id);
        $image = Storage::disk('local')->delete('public/photos/' . basename($photo->image));
        $photo->delete();

        if ($photo) {
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