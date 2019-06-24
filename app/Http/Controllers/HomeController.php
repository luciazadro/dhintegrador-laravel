<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view(home.contact);
    }

    public function store(Request $request)
    {

        $rules = [
//aca falta poner las validaciones
        ];

        $message = [
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

        return redirect('/');


    }
}
