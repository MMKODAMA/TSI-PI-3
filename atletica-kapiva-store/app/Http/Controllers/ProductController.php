<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
public function index(){
return view('product.index');
}

public function create(){
return view('product.create');
}

public function store(Request $request){
$product = Product::create($request->all());
session()->flash('success','Produto cadastrado com sucesso');
return redirect(route('product.index'));
}

public function edit(Product $product){
    return view('product.edit');
}

public function update(Product $product, Request $request){

    $product->update($request->all());
    session()->flash('success', 'O produto foi alterado com sucesso');
    return redirect(route('product.index', $product->id));
}

public function destroy(Product $product){
    $product->delete();
    session()->flash('success', 'O produto apagado com sucesso');
    return redirect(route('product.index'));
}
public function trash(){
    return view('product.trash')->with('products', Product::onlyTrashed()->get());
}

public function restore($product_id){

    $product = Product::onlyTrashed('id',$product_id)->first();
    $product->restore();
    session()->flash('success', 'O produto foi restaurado com sucesso');
    return redirect(route('product.index'));
}


}
