<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->when(request()->q, function ($sliders) {
            $sliders = $sliders->where('title', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'title'     => 'required|unique:sliders',
        ]);
        // dd($request);
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/sliders', $image->hashName());

        $slider = Slider::create([
            'image'     => $image->hashName(),
            'title'     => $request->input('title'),
        ]);

        if ($slider) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.slider.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.slider.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    // public function edit($id)s
    public function edit(Slider $slider)
    {
        // dd($slider);
        // $tags = Tag::latest()->get();
        // $categories = Category::latest()->get();
        return view('admin.slider.edit', compact('slider'));
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
    public function update(Request $request, Slider $slider)
    {
        $sliders = Slider::findOrFail($slider->id);
        $this->validate($request, [
            'title'     => 'required|unique:sliders,title,' . $sliders->id
            // 'image'     => 'required|image'
        ]);
        if ($request->file('image') == "") {
            $slider = Slider::findOrFail($slider->id);
            $slider->update([
                'title'       => $request->input('title'),
                'is_active'   => $request->input('is_active')
            ]);
        } else {
            //remove old image
            $slider = Slider::findOrFail($slider->id);

            $image = Storage::disk('local')->delete('public/sliders/' . basename($slider->image));
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/sliders', $image->hashName());

            $slider->update([
                'image'       => $image->hashName(),
                'title'       => $request->input('title'),
                'is_active'   => $request->input('is_active')
            ]);
        }


        if ($slider) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.slider.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.slider.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $slider = Slider::findOrFail($id);
        $image = Storage::disk('local')->delete('public/sliders/' . basename($slider->image));
        $slider->delete();

        if ($slider) {
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