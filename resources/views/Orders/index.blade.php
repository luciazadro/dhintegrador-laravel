<div class="carrito col-12">
        <table>
            <thead>
                <tr class="table table-hover table-condensed">
                    <th style="width:3%">#</th>
                    <th style="width:24%">Usuario</th>
                    <th style="width:24%">Orden</th>
                    <th style="width:15%">Cantidad</th>
                    <th style="width:8%">Precio</th>
                    <th style="width:10%">Total</th>
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
                        <td><img width="40px" style="border-radius:50%" src="{{asset('/public.storage.product_img/'.$product->picture)}}" alt=""></td>
                        
                            {{-- <td><a href="/users/show{{$product}}">Ver</a></td>
                            <td><a href="/users/edit{{$product->id}}">Editar</a></td>    
                            <td	class="icon-trash"><a href="/users/delete{{$product->id}}">Borrar</td> --}}
                        </tr>
                        @endforeach
        </tbody>
        </table>
    </div>