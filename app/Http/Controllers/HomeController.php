<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Users;
use App\Product;
use App\Category;
// Aqui van todos los modelos que necesitare en las vista


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('formulario');
    }
    public function store()
    {
        return view('formulario');
    }
    public function perfil()
    {
        $user = User::all();
        $product = Product::all();
        return view('perfil')->with('user', $user)
                            ->with('products', $product);
    }
    public function perfilAdm()
    {
        $users= User::all();
        $product = Product::all();
        $categories = Category::all();
        return view('perfilAdm')->with('users', $users)
                                ->with('products',$product);
                                
    }
}
