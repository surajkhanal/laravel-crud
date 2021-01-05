<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // display all products
    public function index() {
        $products = Product::all();

        return view('products.index', [
            'products' => $products
        ]); // products/index.blade.php
    }

    // create product form
    public function create() {
        return view('products.create');
    }

    // store product
    public function store(Request $request) {

        $validData = $request->validate([
            'name' => ['required', 'string', 'alpha', 'min:4', 'max:255'],
            'description' => ['nullable', 'string', 'alpha_num'],
            'price' => ['required', 'numeric', 'digits_between:1,6']
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        // $product = Product::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'price' => $request->price
        // ]);

        return redirect('/products');
    }
}
