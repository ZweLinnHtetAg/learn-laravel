<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function index()
    {
        $products =  Product::all();
        return view('product.index',compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {

       $product = new Product;
       $product->name = $request->name;
       $product->price = $request->price;
       $product->save();

    //    Product::create([
    //     'name'=>$request->name,
    //     'price'=>$request->price
    //     ]);

    return redirect()->route('products');

    }

    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
