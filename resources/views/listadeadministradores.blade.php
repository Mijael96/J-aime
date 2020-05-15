@extends("listasplantilla")
@section("principal")

<nav class="listadeproductos">
            <br>
            <br>
            <h2 style="text-align: center;">Administradores</h2>
            <br>
      

            <button type="button" class="agregar btn btn-primary btn-lg">Nuevo administrador</button>

            <br>
            <br>
            <br>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Numero</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Password</th>
                    <th scope="col">Opciones</th>

                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mijael Volker</td>
                      <td>Mijael Volker</td>
                      <td><button type="button" class="btn btn-danger">Eliminar</button><button type="button" class="btn btn-warning">Modificar</button></td>
                    </tr>
                </tbody>
            </table>
          </nav>
@endsection   