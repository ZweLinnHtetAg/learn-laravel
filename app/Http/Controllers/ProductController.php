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
        $product =  Product::find($id);
        return view('product.edit',compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Product::where('id',$id)->update([
        //     'name' => $request->name,
        //     'price' => $request->price
        // ]);

        Product::find($id)->update([
                 'name' => $request->name,
                 'price' => $request->price
         ]);

        return redirect()->route('products');
    }

   
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products');
    }
}
