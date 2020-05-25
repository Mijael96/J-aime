@extends("listasplantilla")
@section("principal")

          <nav class="listadeproductos">
            <br>
            <br>
            <h2 style="text-align: center;">Usuarios</h2>
            <br>
      

            <br>
            <br>
            <br>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Numero</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opciones</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                $numeracion = 1;
                ?>

                  @foreach($usuarios as $user)
                    <tr>
                      <th scope="row">{{$numeracion++}}</th>
                      <td>{{$user["name"]}}</td>
                      <td>{{$user["email"]}}</td>
                      <td>
                      
                      <form action="/eliminarusuario" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="id" value="{{$user["id"]}}">
                      <input type="submit" class="btn btn-danger borrar" value="Eliminar">
                      </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </nav>
@endsection   