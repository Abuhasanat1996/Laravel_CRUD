<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(5);
    return view('product.index', compact('products'));
    }

    public function create(){
        return view('product.create');
    }
    public function store(Request $request){
        $product = new Product;

        $product->name = $request->name;
        $product->qnt = $request->qnt;
        $product->price = $request->price;

        $product->save();

        return redirect()->route('product.index')
      ->with('success', 'Post created successfully.');


    }
    public function edit($id){
        $products = Product::find($id);
        
        return view('product.edit',compact('products'));
        
    }

    

    public function update(Request $req){
        $product = Product::find($req->id);
        $product->update([
            'name' => $req->name,
            'qnt' => $req->qnt,
            'price' => $req->price,
        ]);
        return redirect()->route('product.index')
      ->with('success', 'Post created successfully.');
    }


    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')
      ->with('success', 'Post created successfully.');

    }


}
