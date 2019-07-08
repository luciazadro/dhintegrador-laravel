<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Users;

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
        return view('perfil');
    }
    public function perfilAdm()
    {
        $users= User::all();
        return view('perfilAdm')->with('users', $users);
    }
}
