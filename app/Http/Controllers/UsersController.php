<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::paginate(5);
        return view('/users/index')->with('users', $users);
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
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('/users/show')->with('user', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit')
            ->with('users', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request,$id)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            /*
            'password' => 'required', 
            */
            'avatar' => 'required',
            'lastname' => 'required',
            'adress' => 'required',
            'location' => 'required',
            'stade' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
        ];

        $messages = [
            'required' => 'el campo :attribute es obligatorio',
        ];

        $this->validate($request, $rules, $messages);

        $users = User::find($id);

        $users->name = $request->input('name') !== $users->name ? $request->input('name') : $users->name;

        $users->email = $request->input('email') !== $users->email ? $request->input('email') : $users->email;
       
        /* 
        esto lo comento porque la pass capaz la pass la cambiamos con el auth 
        $users->password = $request->input('category_id') !== $users->category_id ? $request->input('category_id') : $users->category_id;
        */
        
        $users->avatar = $request->input('avatar') !== $users->avatar ? $request->input('avatar') : $users->avatar;
       
        $users->lastname = $request->input('lastname') !== $users->lastname ? $request->input('lastname') : $users->lastname;
        
        $users->adress = $request->input('adress') !== $users->adress ? $request->input('adress') : $users->adress;

        $users->location = $request->input('location') !== $users->location ? $request->input('location') : $users->location;

        $users->stade = $request->input('stade') !== $users->stade ? $request->input('stade') : $users->stade;

        $users->country = $request->input('country') !== $users->country ? $request->input('country') : $users->country;
        
        $users->zipcode = $request->input('zipcode') !== $users->zipcode ? $request->input('zipcode') : $users->zipcode;

        $users->save();
    
        return redirect("/perfil/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::destroy($id);
        return redirect()->route("users.index");
    }
}
