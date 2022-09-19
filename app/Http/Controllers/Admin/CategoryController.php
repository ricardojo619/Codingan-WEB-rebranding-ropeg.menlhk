<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->when(request()->q, function ($categories) {
            $categories = $categories->where('name', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.category.index', compact('categories'));
    }
    public function create()
    {
        $categories = Category::latest()->get();
        return view('admin.category.create', compact('categories'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'name'      => 'required|unique:categories'
        ]);
        $category = Category::create([
            'name'      => $request->input('name'),
            'slug'      => Str::slug($request->input('name'), '-')
        ]);

        if ($category) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.category.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.category.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Category $category, $id)
    {
        // $categories = Category::latest()->get();
        $category = Category::find($id);
        // dd($category);
        return view('admin.category.edit', compact('category'));
        // return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category, $id)
    {
        $category = Category::find($id);
        $this->validate($request, [
            'name'      => 'required|unique:categories,name,' . $category->id
        ]);
        $category = Category::findOrFail($category->id);
        $category->update([
            'name'      => $request->input('name'),
            'slug'      => Str::slug($request->input('name'), '-'),
            'is_active' => $request->input('is_active')
        ]);

        if ($category) {
            return redirect()->route('admin.category.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            return redirect()->route('admin.category.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if (($category->id == '1') || ($category->id == '2') || ($category->id == '3')) {
            return response()->json([
                'status' => 'error'
            ]);
        } else {
            $category->delete();
            if ($category) {
                return response()->json([
                    'status' => 'success'
                ]);
            } else if ($category) {
                return response()->json([
                    'status' => 'gagal'
                ]);
            } else {
                return response()->json([
                    'status' => 'error'
                ]);
            }
        }
    }
}