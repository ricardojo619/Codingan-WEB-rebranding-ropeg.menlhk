<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profils = Profil::latest()->when(request()->q, function ($profils) {
            $profils = $profils->where('title', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.profil.index', compact('profils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.profil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'image'     => 'required|image',
            'title'     => 'required|unique:profils',
            'content'   => 'required'
        ]);
        // dd($request);
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/profils', $image->hashName());
        $views = 0;
        $profil = Profil::create([
            'image'     => $image->hashName(),
            'title'     => $request->input('title'),
            'content'   => $request->input('content'),
            'views'     => $views
        ]);

        if ($profil) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.profil.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.profil.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Profil $profil)
    {
        return view('admin.profil.edit', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        // $profils = Slider::findOrFail($profil->id);
        $this->validate($request, [
            'title'     => 'required|unique:profils,title,' . $profil->id,
            'content'   => 'required',
            'is_active' => 'required'
        ]);
        if ($request->file('image') == "") {
            $profil = Profil::findOrFail($profil->id);
            $profil->update([
                'title'       => $request->input('title'),
                'content'     => $request->input('content'),
                'is_active'   => $request->input('is_active')
            ]);
        } else {
            //remove old image
            $profil = Profil::findOrFail($profil->id);

            $image = Storage::disk('local')->delete('public/profils/' . basename($profil->image));
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/profils', $image->hashName());

            $profil->update([
                'image'       => $image->hashName(),
                'title'       => $request->input('title'),
                'content'     => $request->input('content'),
                'is_active'   => $request->input('is_active')
            ]);
        }


        if ($profil) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.profil.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.profil.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $profil = Profil::findOrFail($id);
        $image = Storage::disk('local')->delete('public/profils/' . basename($profil->image));
        $profil->delete();

        if ($profil) {
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