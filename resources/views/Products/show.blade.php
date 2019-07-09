<div class="carrito col-12">
        <table>
            <thead>
                <tr class="table table-hover table-condensed">
                    <th style="width:3%">#</th>
                    <th style="width:24%">Nombre</th>
                    <th style="width:24%">Descripcion</th>
                    <th style="width:15%">Categoria</th>
                    <th style="width:8%">Stock</th>
                    <th style="width:10%">Precio</th>
                    <th style="width:15%">Foto de Procuto</th>

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
                        <td>
                        <a href="{{route('products.edit', ['id' => $product->id])}}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						<form id='{{$product->id}}' class='form-delete' action="{{route('products.destroy',['id' => $product->id])}}" method="post">
							@method('DELETE')
							@csrf
							<a id='delete-link-{{$product->id}}' href="#" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</form></td> 
                        </tr> 
                        @endforeach
        </tbody>
        </table>
    </div>