@extends("agregarplantilla")
@section("principal")

            <form class="" action="/administrador/agregarproductos" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre del producto</label>
                  <input type="text" class="agregar form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre del producto" name="name" value="{{old("name")}}">
                  <br>
                  <label for="exampleInputEmail1">Precio</label>
                  <input type="number" class="agregar form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="$" name="precio" value="{{old("precio")}}">
                  <br>
                  <label for="exampleFormControlSelect1">Seccion:</label>
                    <select class="form-control" id="exampleFormControlSelect1" placeholder="seleccione una seccion" name="seccion"  value="{{old("seccion")}}">
                    <option value="">Elige una seccion</option>
                    @foreach($secciones as $seccion)
                    <option value="{{$seccion["id"]}}">{{$seccion["name"]}}</option>
                    @endforeach
                    </select>
                    <br>
                 <label for="exampleInputEmail1">Stock</label>
                <input type="number" class="agregar form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="cantidad" name="stock"  value="{{old("stock")}}">
                <br>
                  <label for="exampleInputEmail1">Imagen</label>
                  <input type="file" class="agregar form-control" id="exampleInputEmail1" name="imagen"  value="{{old("imagen")}}">
                <br>
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary btn-lg">Agregar Producto</button>
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