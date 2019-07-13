    <div class="carrito col-12">
        <table>
            <thead>
                <tr class="table table-hover table-condensed">
                    <th style="width:2%">#</th>
                    <th style="width:18%">Nombre</th>
                    <th style="width:18%">Apellido</th>
                    <th style="width:33%">E-Mail</th>

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
                        
                        <td><a href="{{('users/show/'.$user->id)}}">  <i class="fas fa-eye icono"></i></a></td>
                        <td><a href="{{url('users/edit/'.$user->id)}}" class="edit">  <i class="fas fa-edit icono"></i></a></td>
                        <td><form id='{{$user->id}}' class='form-delete' action="{{url('users/destroy/'.$user->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <a id='delete-link-{{$user->id}}' href="#" class="delete">  <i class="fas fa-trash-alt icono"></i></a>
                            </form></td>
                        </tr>
                        @endforeach
            </tbody>
        </table>
    </div>