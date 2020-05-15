@extends("plantillamodificar")
@section("principal")
<form enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre del producto</label>
                  <input type="text" class="agregar form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre del producto">
                  <br>
                  <label for="exampleInputEmail1">Precio</label>
                  <input type="number" class="agregar form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="$">
                  <br>
                  <label for="exampleFormControlSelect1">Seccion:</label>
                    <select class="form-control" id="exampleFormControlSelect1" placeholder="seleccione una seccion">
                    <option>Cocina</option>
                    <option>Musica</option>
                    <option>Zen</option>
                    <option>Infantil</option>
                    </select>
                    <br>
                 <label for="exampleInputEmail1">Stock</label>
                <input type="number" class="agregar form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="cantidad">
                <br>
                  <label for="exampleInputEmail1">Imagen</label>
                  <input type="file" class="agregar form-control" id="exampleInputEmail1">
                <br>
                </div>
                <br>
                <br>
                <button type="button" class="btn btn-primary btn-lg">Modificar</button>
 </form>
@endsection