@extends("agregarplantilla")
@section("principal")

            <form class="" action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre del producto</label>
                  <input type="text" class="agregar form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre del producto" name="nombre" enctype="multipart/form-data">
                  <br>
                  <label for="exampleInputEmail1">Precio</label>
                  <input type="number" class="agregar form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="$" name="precio">
                  <br>
                  <label for="exampleFormControlSelect1">Seccion:</label>
                    <select class="form-control" id="exampleFormControlSelect1" placeholder="seleccione una seccion" name="seccion">
                    <option value="">Cocina</option>
                    <option value="">Musica</option>
                    <option value="">Zen</option>
                    <option value="">Infantil</option>
                    </select>
                    <br>
                 <label for="exampleInputEmail1">Stock</label>
                <input type="number" class="agregar form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="cantidad">
                <br>
                  <label for="exampleInputEmail1">Imagen</label>
                  <input type="file" class="agregar form-control" id="exampleInputEmail1" name="imagen">
                <br>
                </div>
                <br>
                <br>
                <button type="button" class="btn btn-primary btn-lg">Agregar Producto</button>
          </form>
@endsection   