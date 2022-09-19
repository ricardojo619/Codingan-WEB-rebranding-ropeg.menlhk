<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jumlahasn;
use Illuminate\Http\Request;

class JumlahasnController extends Controller
{
    public function index()
    {
        $jumlahasns = Jumlahasn::latest()->when(request()->q, function ($jumlahasns) {
            $jumlahasns = $jumlahasns->where('eselon', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.jumlahasn.index', compact('jumlahasns'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jumlahasn.create', compact('jumlahasns'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'eselon'    => 'required|unique:jumlahasns'
        ]);
        $jumlahasn = Jumlahasn::create([
            'eselon'    => $request->input('eselon'),
            'jumlah'    => $request->input('jumlah')
        ]);

        if ($jumlahasn) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.jumlahasn.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.jumlahasn.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jumlahasn $jumlahasn, $id)
    {
        $jumlahasn = Jumlahasn::find($id);
        return view('admin.jumlahasn.edit', compact('jumlahasn'));
    }

    public function update(Request $request, Jumlahasn $jumlahasn, $id)
    {
        $jumlahasn = Jumlahasn::find($id);
        $this->validate($request, [
            'eselon'      => 'required|unique:jumlahasns,eselon,' . $jumlahasn->id
        ]);
        $jumlahasn = Jumlahasn::findOrFail($jumlahasn->id);
        $jumlahasn->update([
            'eselon' => $request->input('eselon'),
            'jumlah' => $request->input('jumlah')
        ]);

        if ($jumlahasn) {
            return redirect()->route('admin.jumlahasn.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            return redirect()->route('admin.jumlahasn.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function destroy($id)
    {
        $jumlahasn = Jumlahasn::findOrFail($id);
        $jumlahasn->delete();
        if ($jumlahasn) {
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