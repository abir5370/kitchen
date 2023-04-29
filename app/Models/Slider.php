<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    private static $slider,$img,$imgName,$directory,$Url;
    public static function saveSlider($request){
        self::$slider = new Slider();
        self::$slider->title = $request->title;
        self::$slider->subtitle = $request->subtitle;
        self::$slider->image = self::saveImage($request);
        self::$slider->save();
    }
    public static function saveImage($request){
        self::$img = $request->file('image');
        self::$imgName = 'slider-'.rand().'.'.self::$img->extension();
        self::$directory = 'uploads/slider/';
        self::$Url = self::$directory.self::$imgName;
        self::$img->move(self::$directory,self::$imgName);
        return self::$Url;
    }
}
