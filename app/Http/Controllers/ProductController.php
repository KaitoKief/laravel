<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    /**
    * @return Illuminate\Http\Request;
    */
    public function index()
    {
      $products = Product::all();
      return view('products.index')->with('products',$products);
    }

    public function create()
    {
      return view('products.create');
    }

    public function store(Request $request)
    {   /*
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        */

        $inputs = $request->all();


        $product = Product::Create($inputs);

        return redirect()->action('ProductController@index');
        //return redirect()->route('product.index');
    }

    public function show($id)
    {
      $product = Product::find($id);

      return view('products.show')->with('product', $product);
    }

    public function edit($id)
    {
      $product = Product::find($id);

      //$product = Product::where('id', $id)->first();

      return view('products.edit', compact('product', $product));
      //return view('products.edit')->with('product', $product);
    }

    public function update(Request $request, $id)
    {
      $product = Product::find($id);

      $product->name = $request->name;
      $product->price = $request->price;
      $product->save();

      return redirect()->route('product.index');
    }

    public function destroy ($id)
    {
      //Product::destroy($id);
      $product = Product::find($id)
        ->delete();

      return redirect()->route('product.index');
    }
}
