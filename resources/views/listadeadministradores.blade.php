@extends("listasplantilla")
@section("principal")

<nav class="listadeproductos">
            <br>
            <br>
            <h2 style="text-align: center;">Administradores</h2>
            <br>
      

            <button type="button" class="agregar btn btn-primary btn-lg">Nuevo administrador</button>

            <br>
            <br>
            <br>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Numero</th>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Password</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                $numeracion = 1;
                ?>
                
                @foreach($administradores as $admin)
                    <tr>
                    
                      <th scope="row">{{$numeracion++}}</th>
                   
                      <td>{{$admin["id"]}}</td>
                      <td>{{$admin["name"]}}</td>
                      <td>{{$admin["password"]}}</td>

                      <td>
                      <div class="container">
                      <div class="row">
                      <button class="btn btn-warning"><a href="/administrador/modificaradministrador{{$admin["id"]}}">Modificar</a></button>
                      </td>
                      <td>
                      <form action="/eliminaradministrador" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="id" value="{{$admin["id"]}}">
                      <input type="submit" class="btn btn-danger borrar" value="Eliminar">
                      </form>
                      </div>
                      </div>
                      </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
          </nav>
@endsection   