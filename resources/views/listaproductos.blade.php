@extends("listasplantilla")
@section("principal")

<nav class="listadeproductos">
            <br>
            <br>
            <h2 style="text-align: center;">Productos</h2>
            <br>
            <br>
            <button type="button" class="agregar btn btn-primary btn-lg">Agregar Producto</button>

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
                    <th scope="col">Opciones</th>

                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Musica 01</td>
                      <td>Musica</td>
                      <td>$575</td>
                      <td>50</td>
                      <td><button type="button" class="btn btn-warning">Modificar</button><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>
                </tbody>
            </table>
          </nav>
@endsection   