<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\Slide;
use App\Models\comments;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product =  Product::where('new',1)->paginate(8);
        $sanpham_khuyenmai = Product::where("promotion_price", '<>',0)->paginate(4);
        return view("page.trangchu",compact('slide','new_product','sanpham_khuyenmai'));
    }

    public function getLoaiSP($type)
    {
        $type_product = ProductType::all();
        $sp_theoloai = Product::where('id_type',$type)->get();
        $sp_khac = Product::where('id_type','<>',$type)->paginate(3);
        return view('page.loai_sanpham',compact('sp_theoloai','type_product','sp_khac')); 
    }
  
    public function getDetail(Request $request)
    {
        $sanpham = Product::where('id',$request->id)->first();
        $splienquan = Product::where("id","<>",$sanpham->id,"AND",'id_type','=',$sanpham->id_type,)->paginate(3);
        $comments = comments::where('id_product',$request->id)->get();
        return view('page.chitiet_sanpham',compact('sanpham','splienquan','comments'));
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
