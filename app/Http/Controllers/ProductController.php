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
      //
    }

    public function store(Request $request)
    {
      //
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

    public function destroy ($id)
    //
    {
    }
}
