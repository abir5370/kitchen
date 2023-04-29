<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.category',[
            'categories'=>Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->slug = Str::slug($request->category_name);
        $category->save();
        return back()->with('success','category added successfully!');

    }

    public function categoryStatus($id){
        $category = Category::find($id);
        if ($category->status==1){
            $category->status = 0;
        }
        else{
            $category->status = 1;
        }
        $category->save();
        return back();
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.category.edit_category',[
            'category'=>Category::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->slug = Str::slug($request->category_name);
        $category->save();
        return redirect()->route('category.index')->with('update','category Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();
        return back()->with('delete','category deleted!');
    }
}
