@extends("plantillamodificar")
@section("principal")
    <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre del administrador</label>
                  <input type="text" class="agregar form-control" id="exampleInputEmail1"  placeholder="Admin">
                  
                <br>
                <br>
                <label for="exampleInputEmail1">Contraseña</label>
                  <input type="password" class="agregar form-control" id="exampleInputEmail1"  placeholder="Contraseña">

                <br>
                <br>
                <button type="button" class="btn btn-primary btn-lg">Modificar</button>
    </form>
@endsection