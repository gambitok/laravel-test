<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index')
            ->with('products',$products);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'       => 'required',
            'description'=> 'required',
            'price'      => 'required|regex:/^\d+(\.\d{1,2})?$/'
        ]);

        $product = new Product;
        $product->name          = $request->input('name');
        $product->description   = $request->input('description');
        $product->price         = $request->input('price');

        $product->save();

        return redirect('products')->with('message','Successfully created product!');
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show')
            ->with('product', $product);
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit')
            ->with('product', $product);
    }

    public function update($id,Request $request)
    {
        $this->validate($request, [
            'name'       => 'required',
            'description'=> 'required',
            'price'      => 'required|regex:/^\d+(\.\d{1,2})?$/'
        ]);

        $product = Product::find($id);
        $product->name          = $request->input('name');
        $product->description   = $request->input('description');
        $product->price         = $request->input('price');

        $product->save();

        return redirect('products')->with('message',"Successfully updated product #$id!");
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            Product::query()->truncate();
            $message="Successfully deleted all products";
        } else {
            $product->delete();
            $message="Successfully deleted the product #$id!";
        }
        return redirect('products')->with('message',$message);
    }
}
