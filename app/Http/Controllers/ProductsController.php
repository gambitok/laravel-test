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

    public function store()
    {
        $rules = array(
            'name'       => 'required',
            'description'=> 'required',
            'price'      => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return redirect('products/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $product = new Product;
            $product->name       = Input::get('name');
            $product->description= Input::get('description');
            $product->price = Input::get('price');
            $product->save();

            Session::flash('message', 'Successfully created product!');
            return redirect('products');
        }
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

        return view('product.edit')
            ->with('product', $product);
    }

    public function update($id)
    {
        $rules = array(
            'name'          => 'required',
            'description'   => 'required',
            'price'         => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return redirect('products/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $product = Product::find($id);
            $product->name          = Input::get('name');
            $product->description   = Input::get('description');
            $product->price         = Input::get('price');
            $product->save();

            Session::flash('message', 'Successfully updated product!');
            return redirect('products');
        }
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        Session::flash('message', 'Successfully deleted the product!');
        return redirect('products');
    }
}
