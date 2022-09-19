<?php

namespace App\Http\Controllers\Admin;

use App\Models\Struktur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strukturs = Struktur::latest()->when(request()->q, function ($strukturs) {
            $strukturs = $strukturs->where('title', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.struktur.index', compact('strukturs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.struktur.create');
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
            'title'     => 'required|unique:strukturs',
        ]);
        // dd($request);
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/strukturs', $image->hashName());
        $views = 0;
        $struktur = Struktur::create([
            'image'     => $image->hashName(),
            'title'     => $request->input('title'),
            'views'     => $views
        ]);

        if ($struktur) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.struktur.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.struktur.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    // public function edit($id)
    public function edit(Struktur $struktur)
    {
        //
        return view('admin.struktur.edit', compact('struktur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    public function update(Request $request, Struktur $struktur)
    {
        $struktur = Struktur::findOrFail($struktur->id);
        $this->validate($request, [
            'title'     => 'required|unique:strukturs,title,' . $struktur->id
        ]);
        if ($request->file('image') == "") {
            $struktur = Struktur::findOrFail($struktur->id);
            $struktur->update([
                'title'       => $request->input('title'),
                'is_active'   => $request->input('is_active')
            ]);
        } else {
            //remove old image
            $struktur = Struktur::findOrFail($struktur->id);

            $image = Storage::disk('local')->delete('public/struktur/' . basename($struktur->image));
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/strukturs', $image->hashName());

            $struktur->update([
                'image'       => $image->hashName(),
                'title'       => $request->input('title'),
                'is_active'   => $request->input('is_active')
            ]);
        }


        if ($struktur) {
            return redirect()->route('admin.struktur.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            return redirect()->route('admin.struktur.index')->with(['error' => 'Data Gagal Diupdate!']);
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

        $struktur = Struktur::findOrFail($id);
        if ($struktur->id == '1') {
            return response()->json([
                'status' => 'error'
            ]);
        } else {
            $image = Storage::disk('local')->delete('public/struktur/' . basename($struktur->image));
            $struktur->delete();

            if ($struktur) {
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
}