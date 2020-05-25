@extends("agregarplantilla")
@section("principal")

        <form action="/administrador/agregaradministrador" method="post">
        {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre del administrador</label>
                  <input type="text" class="agregar form-control" id="exampleInputEmail1"  placeholder="Admin" name="name"  value="{{old("name")}}" require>
                  
                <br>
                <br>
                <label for="exampleInputEmail1">Contraseña</label>
                  <input type="password" class="agregar form-control" id="exampleInputEmail1"  placeholder="Contraseña" name="password" value="{{old("password")}}" require>

                <br>
                <br>

                <!-----<label for="exampleInputEmail1">Repetir Contraseña</label>
                  <input type="password" class="agregar form-control" id="exampleInputEmail1"  placeholder="Contraseña" name="reppassword" value="{{old("reppassword")}}" require>

                <br>
                <br>

                !--->
                <button type="submit" class="btn btn-primary btn-lg">Agregar Administrador</button>
                <div class="container">
                <br>
                <br>
                <ul class="error">
                   @foreach($errors->all() as $error)
                   <li style="color:red; text-align:center; list-style:none; font-size:20px;">{{$error}}</li>
                   <br>
                   @endforeach
                </ul>
                </div>
          </form>
@endsection   