<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
       return view('categories.index')->with('categories', $category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $category = Category::all();
       return view('categories.create')->with('category', $category);
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
        ];
 
        $mensajes = [
            'required' => 'el campo :attribute es obligatorio'
        ];
        $this->validate($request, $reglas, $mensajes);
 
        $category = new Category($request->all());
 
        $category->save();
 
        return redirect('/perfilAdm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    
    public function show()
    {
        $category = Category::all();
        return view('categories.show')->with('categories',$category);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $category = Category::find($id);
       $product = Product::all();

       return view('categories.edit')
           ->with('product', $product)
           ->with('categories', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
        ];
        $messages = [
            'required' => 'el campo :attribute es obligatorio',
        ];
 
        $this->validate($request, $rules, $messages);
        
        $category = Category::find($id);
        
         $category->name = $request->input('name') !== $category->name ? $request->input('name') : $category->name;
         
         $category->save();
     
         return redirect("/categories/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Caetegory::destory($id);
        return redirect("/categories/");
    }
}
