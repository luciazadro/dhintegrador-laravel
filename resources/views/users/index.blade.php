    <div class="carrito col-12">
        <table>
            <thead>
                <tr class="table table-hover table-condensed">
                    <th style="width:2%">#</th>
                    <th style="width:18%">Nombre</th>
                    <th style="width:18%">Apellido</th>
                    <th style="width:30%">E-Mail</th>

                    <th style="width:5%">Ver</th>
                    <th style="width:8%">Editar</th>
                    <th style="width:8%">Borrar</th>
            </thead>
        <tbody>
            <tr>
                <td data-th="Users">
                        @foreach ($users as $user)
                        <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        
                        <td><a href="{{route('users.edit', ['id' => $user->id])}}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <form id='{{$user->id}}' class='form-delete' action="{{route('users.destroy',['id' => $user->id])}}" method="post">
                            @method('DELETE')
                            @csrf
                            <a id='delete-link-{{$user->id}}' href="#" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </form></td>
                        </tr>
                        @endforeach
            </tbody>
        </table>
    </div>