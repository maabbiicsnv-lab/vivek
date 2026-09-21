<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productstable=Product::all();
        return view("showproducts" , compact("productstable") );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("addproduct");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data=$request->validate([
        "title"     =>  "required" ,
        "stock"     =>  "required" ,
        "price"     =>  "required" ,
        "category"  =>  "required" 
       ]);

       Product::create($data);
       return redirect("/addproduct")->with("success","product is added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $prd=Product::find($request->id);
         return view("editproduct" , compact("prd") );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
            $product  =Product::find($request->id);

            $product->title= $request->title;
            $product->stock= $request->stock;
            $product->price= $request->price;
            $product->category= $request->category;
            
            $product->save();
            
            return redirect("/showproducts");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
            Product::destroy($request->id);
            return redirect("/showproducts")->with("success","product is deleted");
    }
}
