<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('users.profile');
    }

    public function create()
    {
        return view(users.create);
    }

    public function store(Request $request)
    {
        $rules = [
            //aca falta poner las validaciones
                    ];
            
                    $messages = [
                        'El campo :attribute es obligatorio'
                    ];
            
                    $this->validate($request, $rules, $messages);
            
                    $form = new Form($request->all());
            
                    // esto esta choreado del codigo de rodo solo A MODO DE EJEMPLO, esto se pone solo si los imputs del form no coinciden con la DB
                    
            // $movie = new Movie([
                    //     'title' => $request->input('title'), 
                    //     'awards' => $request->input('awards'), 
                    //     'release_date' => $request->input('release_date'), 
                    //     'rating' => $request->input('rating'), 
                    //     'genre_id' => $request->input('genre_id'),
                    //     'length' => $request->input('length'),
                    // ]);
            
                    $form->save();
            
                    return redirect('/login');  
    }

    public function login()
    {
        return view(users.login);
    }

    public function logout()
    {
        //aca tendria que hacer la logicaa para que me desloguee, acto seguido un redirect al home/login
        return redirect('/login');
    }


}
