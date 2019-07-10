<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function add($id)
    {
        $product = Product::find($id);

        $producto = [
            'id' => $product->id,
            'nombre' => $product->name, 
            'precio' => $product->price,
        ];

        session()->push('carrito.product', $producto);

        $limit = 10;
        $product = Product::make()->paginate($limit);

        return redirect('/perfil');

    }

    public function remove($id, Request $request)
    {
        $product = $request->session()->get('carrito.product');
        $keys = array_keys($product);

        foreach($keys as $index) {
            if($product[$index]['id'] == $id) {
                $request->session()->forget('carrrito.product' . $index);
            }
        }
        return redirect()->back();

    }
    
    public function flush(Request $request)
    {
        $request->session()->flush();
        return redirect('/perfil');
    }

    public function checkout($id)
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $product = session('carrito')['product'];
        return view('carrito.show')->with('product', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
