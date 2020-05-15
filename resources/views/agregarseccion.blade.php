@extends("agregarplantilla")
@section("principal")

        <form class="" action="/agregarseccion" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre de la seccion</label>
                  <input type="text" class="agregar form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de la seccion" name="nombre">

                  
                <br>
                <br>
                <button type="submit" class="btn btn-primary btn-lg">Agregar Sección</button>
          </form>
@endsection   