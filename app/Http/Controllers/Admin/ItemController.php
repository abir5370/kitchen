<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.item.manage_item',[
            'items'=>Item::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.item.add_item',[
            'categories'=>$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Item::saveItem($request);
        return back()->with('success','item insert successfully!');
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
        return view('admin.item.edit_item',[
            'categories'=>Category::all(),
            'item'=>Item::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Item::updateItem($request,$id);
        return redirect()->route('item.index')->with('update','update successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::find($id);
            if (file_exists($item->image)) {
                unlink($item->image);
                $item->delete();
            }
            $item->delete();
            return back()->with('delete','delete successfull!');
    }
}
