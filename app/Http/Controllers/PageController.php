<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product =  Product::where('new',1)->get();
        return view("page.trangchu",compact('slide','new_product'));
    }





    
    public function getLoaiSP()
    {
        return view("page.loai_sanpham"); 
    }
    public function getchitietSP()
    {
        return view('page.chitiet_sanpham');
    }
    public function getLienHe()
    {
        return view('page.lienhe');
    }
    public function getAbout()
    {
        return view('page.about');
    }
}
