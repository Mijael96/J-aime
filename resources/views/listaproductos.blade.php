@extends("listasplantilla")
@section("principal")

<nav class="listadeproductos">
            <br>
            <br>
            <h2 style="text-align: center;">Productos</h2>
            <br>
            <br>
            <form class="" action="/administrador/agregarproductos" method="post" > <button type="button" class="agregar btn btn-primary btn-lg">Agregar Producto</button></form>

            <br>
            <br>
            <br>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Numero</th>
                    <th scope="col">Nombre del producto</th>
                    <th scope="col">Sección</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                  $numeracion=1;
                ?>
                    <tr>
                    @foreach($todos as $todo)
                    <tr>
                      <th scope="row">{{$numeracion++}}</th>
                      <td>{{$todo["name"]}}</td>
                      <td>@if($todo["seccion"] == 8)cocina
                      @elseif($todo["seccion"] == 9)infantil
                      @elseif($todo["seccion"] == 12)frases
                      @elseif($todo["seccion"] == 13)zen
                      @else musica
                      @endif</td>
                      <td>{{$todo["precio"]}}</td>
                      <td>{{$todo["stock"]}}</td>
                      <td><img src="/storage/{{$todo["imagen"]}}" class="imagenlista"></td>
          
                      
                      <td>
                      <div class="container">
                      <div class="row">
                      <button class="btn btn-warning"><a href="/administrador/modificarproducto{{$todo["id"]}}">Modificar</a></button>
                      </td>
                      <td>
                      <form action="/eliminarproducto" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="id" value="{{$todo["id"]}}">
                      <input type="submit" class="btn btn-danger borrar" value="Eliminar">
                      </form>
                      </div>
                      </div>
                      </td>
                    </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
          </nav>
@endsection   