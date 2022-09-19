<?php

namespace App\Http\Controllers\Admin;

use App\Models\Running;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RunningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $runnings = Running::latest()->when(request()->q, function ($runnings) {
            $runnings = $runnings->where('title', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.running.index', compact('runnings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.running.create');
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
            'title' => 'required|unique:runnings'
        ]);
        $views = 0;
        $running = Running::create([
            'title' => $request->input('title') //,
            // 'is_active' => $views
        ]);
        // dd($running);
        if ($running) {
            return redirect()->route('admin.running.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('admin.running.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Running $running)
    {
        return view('admin.running.edit', compact('running'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Running $running)
    // public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'     => 'required'
            // 'name' => 'required|unique:runnings,title,' . $running->id
        ]);

        $running = Running::findOrFail($running->id);
        $running->update([
            'title'     => $request->input('title'),
            'is_active'   => $request->input('is_active')
        ]);

        if ($running) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.running.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.running.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $running = Running::findOrFail($id);
        $running->delete();

        if ($running) {
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