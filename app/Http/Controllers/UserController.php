<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index')->with('users',$users);
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
        $reglas = [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'avatar' => 'required',
            'role' => 'required'
        ];

        $mensajes = [
            'required' => 'el campo :attribute es obligatorio'
        ];

        $this->validate($request, $reglas, $mensajes);

        $avatar = $request->file('avatar')->store('avatar', 'public');
        
        $user = new User($request->all());

        $user->avatar = $avatar;

        $user->save();

        return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function show(User $user)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::find($user);

        return view('users.edit')
            ->with('users', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $reglas = [
            'adress' => 'required',
            'location' => 'required',
            'stade' => 'required',
            'zipcode' => 'required',
            'country' => 'required',
            'avatar' => 'required',
            'role' => 'required'
        ];

        $mensajes = [
            'required' => 'el campo :attribute es obligatorio'
        ];
        $this->validate($request, $reglas, $mensajes);
        
        $users = User::find($user);

         $users->adress = $request->input('adress') !== $users->adress ? $request->input('adress') : $users->adress;
         $users->location = $request->input('location') !== $users->location ? $request->input('location') : $users->location;
         $users->stade = $request->input('stade') !== $users->stade ? $request->input('stade') : $users->stade;
         $users->country = $request->input('country') !== $users->country ? $request->input('country') : $users->country;
         $users->zipcode = $request->input('zipcode') !== $users->zipcode ? $request->input('zipcode') : $users->zipcode;
         $users->avatar = $request->input('avatar') !== $users->avatar ? $request->input('avatar') : $users->avatar;

         $users->save();

         return redirect("/perfil/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $userBorrar = User::find($user);
        $userBorrar->delete();
        return redirect('/perfilAdm');
    }
}