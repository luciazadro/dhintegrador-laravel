<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $limit=10;
       $product = Product::make()->paginate($limit);
       return view('products.index')->with('movies', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = Category::all();
       return view('products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'stock_id' => 'required',
            'price' => 'required',
        ];
 
        $mensajes = [
            'required' => 'el campo :attribute es obligatorio'
        ];
        $this->validate($request, $reglas, $mensajes);

 
        $photopath_product = $request->file('picture')->store('product_img', 'public');
 
        $product = new Product($request->all());
 
        $product->picture = $photopath_product;
 
        $product->save();
 
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::find($product);
       return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

       $product = Product::find($product);

       return view('products.edit')
           ->with('product', $product)
           ->with('category', $product->category)
           ->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'stock_id' => 'required',
            'price' => 'required',
        ];
        $messages = [
            'required' => 'el campo :attribute es obligatorio',
        ];
 
        $this->validate($request, $rules, $messages);
        
        $product = Product::find($product);
        
         $product->title = $request->input('name') !== $product->title ? $request->input('name') : $product->name;
         
         $product->description = $request->input('description') !== $product->description ? $request->input('description') : $product->description;
         $product->category_id = $request->input('category_id') !== $product->category_id ? $request->input('category_id') : $product->category_id;
         $product->stock_id = $request->input('stock_id') !== $product->stock_id ? $request->input('stock_id') : $product->stock_id;
         $product->price = $request->input('price') !== $product->price ? $request->input('price') : $product->price;
         $product->picture = $request->input('picture') !== $product->picture ? $request->input('picture') : $product->picture;
         
         $product->save();
     
         return redirect("/products/" . $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        
    }
}
