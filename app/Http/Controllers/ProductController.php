<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){
        $index = Product::all();
        return view('index', ['index' => $index]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $data = $request->all();
        $newIndex = Product::create($data);
        return redirect(route('index'));
    }

    public function edit(Product $index){
        return view('edit', ['index' => $index]);

    }

    public function update(Product $index, Request $request){
        $data = $request->all();
        $index->update($data);

        return redirect(route('index'))->with('success', 'Product Updated Succesfully');
    }

    public function delete(Product $index){
        $index->delete();
        return redirect(route('index'))->with('success', 'Product Deleted Succesfully');
    }
}

