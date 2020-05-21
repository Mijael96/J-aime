@extends("listasplantilla")
@section("principal")

<nav class="listadeproductos">
            <br>
            <br>
            <h2 style="text-align: center;">Secciones</h2>
            <br>
            <br>
            <button type="button" class="agregar btn btn-primary btn-lg">Agregar Seccion</button>

            <br>
            <br>
            <br>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Numero</th>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre seccion</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                $numeracion = 1;
                ?>
                
                @foreach($secciones as $seccion)
                    <tr>
                      <th scope="row">{{$numeracion++}}</th>
                      <td>{{$seccion["id"]}}</td>
                      <td>{{$seccion["name"]}}</td>
          
                      
                      <td>
                      <div class="container">
                      <div class="row">
                      <button class="btn btn-warning"><a href="/administrador/modificarsecciones{{$seccion["id"]}}">Modificar</a></button>
                      </td>
                      <td>
                      <form action="/eliminarseccion" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="id" value="{{$seccion["id"]}}">
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