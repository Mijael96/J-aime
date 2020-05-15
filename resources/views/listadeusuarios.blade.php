@extends("listasplantilla")
@section("principal")

          <nav class="listadeproductos">
            <br>
            <br>
            <h2 style="text-align: center;">Usuarios</h2>
            <br>
      

            <br>
            <br>
            <br>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Numero</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opciones</th>

                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mijael Volker</td>
                      <td>Mijael_Volker@hotmail.com</td>
                      <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>
                </tbody>
            </table>
          </nav>
@endsection   