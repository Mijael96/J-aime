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
                    <th scope="col">Nombre seccion</th>
                    <th scope="col">Cantidad de productos</th>
                    <th scope="col">Opciones</th>

                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Musica</td>
                      <td>4</td>
                      <td><button type="button" class="btn btn-warning">Modificar</button><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>
                </tbody>
            </table>
          </nav>
@endsection   