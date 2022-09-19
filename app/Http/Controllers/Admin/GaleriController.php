<?php

namespace App\Http\Controllers\Admin;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $galeris = Galeri::latest()->get();
        $galeris = Galeri::latest()->when(request()->q, function ($galeris) {
            $galeris = $galeris->where('title', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.galeri.index', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeri.create');
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
            'title'     => 'required|unique:galeris'
        ]);
        // dd($request);
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/galeris', $image->hashName());
        $views = 0;
        $galeri = Galeri::create([
            'image'     => $image->hashName(),
            'title'     => $request->input('title'),
            'views'     => $views
        ]);

        if ($galeri) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.galeri.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.galeri.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
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
    public function update(Request $request, Galeri $galeri)
    {
        $galeris = Galeri::findOrFail($galeri->id);
        $this->validate($request, [
            'title'     => 'required|unique:sliders,title,' . $galeris->id
            // 'image'     => 'required|image'
        ]);
        if ($request->file('image') == "") {
            $galeri = Galeri::findOrFail($galeris->id);
            $galeri->update([
                'title'       => $request->input('title'),
                'is_active'   => $request->input('is_active')
            ]);
        } else {
            //remove old image
            $galeri = Galeri::findOrFail($galeris->id);

            $image = Storage::disk('local')->delete('public/galeris/' . basename($galeri->image));
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/galeris', $image->hashName());

            $galeri->update([
                'image'       => $image->hashName(),
                'title'       => $request->input('title'),
                'is_active'   => $request->input('is_active')
            ]);
        }


        if ($galeri) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.galeri.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.galeri.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $galeri = Galeri::findOrFail($id);
        $image = Storage::disk('local')->delete('public/galeris/' . basename($galeri->image));
        $galeri->delete();

        if ($galeri) {
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