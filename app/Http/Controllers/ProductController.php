<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        $products = Product::all();
        return view('products.create')->with('products', $products);
    }

    public function store(Request $request)
    {

        $rules = [
            //validaciones de los campos del prod
        ];

        $message = [
            'El campo :attribute es obligatorio'
        ];

        $this->validate($request, $rules, $message);

        $product = new Product($request->all());

        // $movie = new Movie([
        //     'title' => $request->input('title'), 
        //     'awards' => $request->input('awards'), 
        //     'release_date' => $request->input('release_date'), 
        //     'rating' => $request->input('rating'), 
        //     'genre_id' => $request->input('genre_id'),
        //     'length' => $request->input('length'),
        // ]);

       $product->save(); 

       return redirect('/cart');
    }

    public function cart()
    {
        return view('products.cart');
    }

    public function product($id)
    {
        $product = Product::find($id);

        return view('products.show')->with('product', $product);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('products.edit')
        ->with('product', $products)
        ->with('category', $categories);
                     
     //   Paso 1, buscar la pelicula:
       // $movie = Movie::find($id);
        //Paso 2, por si hubiera que cambiarlo, envio los GENEROS tambien
        //$genres = Genre::all();
        //Paso 3, devolver la vista CON la pelicula y los generos:
        //return view('movies.edit')
       //     ->with('movie', $movie)
         //   ->with('genres', $genres);
        //De aca, ir al archivo Blade con la vista porque se complica!
    }

    public function update(Request $request, $id)
    {
        // Dejo este dd comentado para ir viendo los cambios!
        //dd($request->all());
        // Primero que nada, nos auto-robamos la validacion:
        $rules = [
            //PONER VALIDACION DEL PROD
        ];

        $message = [
            'required' => 'el campo :attribute es obligatorio',
        ];
        
        $this->validate($request, $rules, $message);

        // La logica de hacer un update es la siguiente:
        // Tenemos el personaje A, que se llama Request, y el personaje B, que se 
        // llama Movie.
        // El personaje Request trae data que puede ser nueva o no, y el personaje Movie
        // se para adelante y dice "compara con todo lo que tengo yo". Si el valor de un 
        // campo de Request es igual a lo que ya tiene Movie, no hay cambio. Si es diferente,
        // Movie atrapa el cambio y lo guarda, borrando el dato que tenia antes.

        // En codigo:
        $product = Product::find($id);

        // Explicacion con el primer campo/atributo
         $movie->title = $request->input('title') !== $movie->title ? $request->input('title') : $movie->title;
         // El titulo va a ser igual a lo que salga de este if ternario.
         // El if ocurre antes del signo de pregunta, "lo que llega de Request, NO ES igual a lo que movie ya tiene?"
         // si NO es igual, pone lo que llego, si es igual, queda como esta.
         $movie->rating = $request->input('rating') !== $movie->rating ? $request->input('rating') : $movie->rating;
         $movie->awards = $request->input('awards') !== $movie->awards ? $request->input('awards') : $movie->awards;
         $movie->length = $request->input('length') !== $movie->length ? $request->input('length') : $movie->length;
         $movie->release_date = $request->input('release_date') !== $movie->release_date ? $request->input('release_date') : $movie->release_date;
         $movie->genre_id = $request->input('genre_id') !== $movie->genre_id ? $request->input('genre_id') : $movie->genre_id;

         //una vez que terminamos el proceso anterior, simplemente hacemos:
         $product->save();

         // y vamos a ver los cambios:
         return redirect("/cart" . $product->id);
    }

    public function delete($id)
    {
        //
    }
}
