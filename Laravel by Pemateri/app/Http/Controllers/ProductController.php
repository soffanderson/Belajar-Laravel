<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function formCreate()
    {
        return view('product/form-create');
    }

    public function saveData(Request $request)
    {
        // return $request->all();
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->save();
        
        return redirect('/');
    }

    public function formEdit($id)
    {
        $product = Product::find($id);
        return view('product/form-edit', compact('product'));
    }

    public function updateData(Request $request, $id)
    {
        // select * from product where id = $id

        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->save();
        
        return redirect('/');
    }

    
    public function deleteData($id)
    {
        $product = Product::find($id)->delete();
        
        return redirect('/');
    }
}
