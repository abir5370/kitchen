<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderContrller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.slider.manage_slider',[
            'sliders'=>Slider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.add_slider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Slider::saveSlider($request);
        return back()->with('success','slider Insert success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //
    }
    public function sliderStatus($id){
        $slider = Slider::find($id);
        if ($slider->status==1){
            $slider->status = 0;
        }
        else{
            $slider->status = 1;
        }
        $slider->save();
        return back();
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);
        if (file_exists($slider->image)){
            unlink($slider->image);
            $slider->delete();
        }
        $slider->delete();
        return back()->with('delete','delete successfull!');
    }
}
