<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_tiki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product_tiki::all();
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products = new Product_tiki();
        $products->name = $request->input("name");
        $products->img = $request->input("img");
        $products->star = $request->input("star");
        $products->price = $request->input("price");
        $products->sale_number = $request->input("sale_number");
        $products->promote = $request->input("promote");
        $products->save();
        $saved = $products->save();
        if ($saved) :
            return response()->json(['message' => 'save Succesfull']);
        else :
            return response()->json(['message' => 'save not Succesful']);
        endif;
    }

    /**
     * Display the specified resource.
     */
    public function getOne(string $id)
    {
        $products = Product_tiki::find($id);
        return response()->json($products);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product= Product_tiki::find($id);
        $product->name = $request->input("name");
        $product->img = $request->input("img");
        $product->star = $request->input("star");
        $product->price = $request->input("price");
        $product->sale_number = $request->input("sale_number");
        $product->promote = $request->input("promote");
        $product->save();
        return response()->json(["mes" => "Update successful", "product" =>$product]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $products = Product_tiki::find($id);
        $deleted =  $products->delete();

        if ($deleted) {
            return response()->json(["mes" => "delete successful"]);
        } else {
            return response()->json(["mes" => "delete not successful"]);
        }
    }
}
