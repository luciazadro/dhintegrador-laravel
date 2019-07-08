    <div class="carrito col-12">
        <table>
            <thead>
                <tr class="table table-hover table-condensed">
                    <th style="width:5%">#</th>
                    <th style="width:20%">Nombre</th>
                    <th style="width:20%">Apellido</th>
                    <th style="width:30%">E-Mail</th>

                    <th style="width:5%">Ver</th>
                    <th style="width:5%">Editar</th>
                    <th style="width:5%">Borrar</th>
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
                        
                            <td><a href="/users/show{{$user->id}}">Ver</a></td>
                            <td><a href="/users/update{{$user->id}}">Editar</a></td>    
                            <td><a href="/users/delete{{$user->id}}">Borrar</a></td>
                        </tr>
                        @endforeach
        </tbody>
        </table>
    </div>