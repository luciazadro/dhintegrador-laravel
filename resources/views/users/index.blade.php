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
                        
                            <td><a href="/users/show{{$user}}">Ver</a></td>
                            <td><a href="/users/edit{{$user->id}}">Editar</a></td>    
                            <td	class="icon-trash"><a href="/users/delete{{$user->id}}">Borrar</td>
                        </tr>
                        @endforeach
        </tbody>
        </table>
    </div>