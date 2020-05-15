@extends("agregarplantilla")
@section("principal")

        <form action="/agregaradministrador" method="post">
        {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre del administrador</label>
                  <input type="text" class="agregar form-control" id="exampleInputEmail1"  placeholder="Admin" name="nombre">
                  
                <br>
                <br>
                <label for="exampleInputEmail1">Contraseña</label>
                  <input type="password" class="agregar form-control" id="exampleInputEmail1"  placeholder="Contraseña" name="password">

                <br>
                <br>
                <button type="submit" class="btn btn-primary btn-lg">Agregar Administrador</button>
          </form>
@endsection   