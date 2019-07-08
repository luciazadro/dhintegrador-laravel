<div class="carrito col-12">
        <table>
            <thead>
                <tr class="table table-hover table-condensed">
                    <th style="width:6%">#</th>
                    <th style="width:19%">Nombre</th>
                    <th style="width:19%">Descripcion</th>
                    <th style="width:14%">Categoria</th>
                    <th style="width:14%">Stock</th>
                    <th style="width:14%">Precio</th>
                    <th style="width:14%">Foto de Procuto</th>

            </thead>
        <tbody>
            <tr>
                <td data-th="Users">
                        @foreach ($products as $product)
                        <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->stock_id}}</td>
                        <td>{{$product->price}}</td>
                        <td><img width="40px" style="border-radius:50%" src="{{asset('storage/products_img/'.Product::class()->picture)}}" alt=""></td>
                        
                        
                            {{-- <td><a href="/users/show{{$product}}">Ver</a></td>
                            <td><a href="/users/edit{{$product->id}}">Editar</a></td>    
                            <td	class="icon-trash"><a href="/users/delete{{$product->id}}">Borrar</td> --}}
                        </tr>
                        @endforeach
        </tbody>
        </table>
    </div>