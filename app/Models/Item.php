<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Item extends Model
{
    use HasFactory;
    private static $item,$img,$imgName,$directory,$Url;
    public static function saveItem($request){
        self::$item = new Item();
        self::$item->category_id = $request->category_id;
        self::$item->item_name = $request->item_name;
        self::$item->description = $request->description;
        self::$item->price = $request->price;
        if ($request->file('image')){
            self::$item->image = self::saveImage($request);
        }
        self::$item->save();
    }
    public static function saveImage($request){
        self::$img = $request->file('image');
        self::$imgName = Str::slug('item_name').rand().'.'.self::$img->extension();
        self::$directory = 'uploads/item/';
        self::$Url = self::$directory.self::$imgName;
        self::$img->move(self::$directory,self::$imgName);
        return self::$Url;
    }
    public static function updateItem($request,$id){
        self::$item = Item::find($id);
        self::$item->category_id = $request->category_id;
        self::$item->item_name = $request->item_name;
        self::$item->description = $request->description;
        self::$item->price = $request->price;
        if ($request->file('image')){
            if (file_exists(self::$item->image)){
                unlink(self::$item->image);
                self::$item->image = self::saveImage($request);
            }
            else{
                self::$item->image = self::saveImage($request);
            }
        }
        self::$item->save();
    }
    public function relCategory(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
