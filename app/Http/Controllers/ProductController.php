<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::all();
        return view('products.index')->with(compact('products'));//lista
    }

    public function create()
    {
        return view('products.create');//registra
    }

    public function store(Request $request)
    {
        $rules=[
            'name'=>'required|AlphaDash',
            'reference'=>'required',
            'price'=>'required|numeric|min:0',
            'weight'=>'required|numeric|min:0',
            'category'=>'required',
            'stock'=>'required',
        ];
        $this->validate($request, $rules);
        $product=new Product();
        $product->name=$request->input('name');
        $product->reference=$request->input('reference');
        $product->price=$request->input('price');
        $product->weight=$request->input('weight');
        $product->category=$request->input('category');
        $product->stock=$request->input('stock');
        $product->save();
        return redirect('/products');//guarda bases de datos
    }

    public function sale($id)
    {
        $product=Product::find($id);

        return view('products.saleproduct')->with(compact('product'));
    }
    public function saleupdate(Request $request, $id){
        $product=Product::find($id);
        $product->stock=($request->input())-$product;
        
        $product->save();
        return redirect('/products');
    }

    public function edit($id)
    {
        
        $product=Product::find($id);

        return view('products.edit')->with(compact('product'));
    }


    public function update(Request $request, $id)
    {
        $rules=[
            'name'=>'required|AlphaDash',
            'reference'=>'required',
            'price'=>'required|numeric|min:0',
            'weight'=>'required|numeric|min:0',
            'category'=>'required',
            'stock'=>'required',
        ];
        $this->validate($request, $rules);
        $product=Product::find($id);
        $product->name=$request->input('name');
        $product->reference=$request->input('reference');
        $product->price=$request->input('price');
        $product->weight=$request->input('weight');
        $product->category=$request->input('category');
        $product->stock=$request->input('stock');
        $product->save();
        return redirect('/products');
    }

    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return back();
    }
}


