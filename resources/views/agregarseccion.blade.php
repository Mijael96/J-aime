@extends("listasplantilla")
@section("principal")

        <form class="" action="/administrador/agregarseccion" method="post">
        {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre de la seccion</label>
                  <input type="text" class="agregar form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de la seccion" name="name">

                  
                <br>
                <br>
                <button type="submit" class="btn btn-primary btn-lg">Agregar Sección</button>
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