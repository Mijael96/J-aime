@extends("plantillaadmin")
@section("principal")

        <div class="menu">
            <h3>Menú</h3>
            <br>
            <br>
            <button type="button" class="boton btn btn-outline-primary" href="index"><a href="/">Ver Pagina</a></button>
            <br>
            <br>
            <div class="row d-flex justify-content-around">
                <div class="col-md-5">
                    <button type="button" class="boton btn btn-outline-primary"><a href="/administrador/listadeproductos">Lista de productos</a></button>
                 </div>
                 <div class="col-md-5">
                    <button type="button" class="boton btn btn-outline-success"><a href="/administrador/listadeusuarios">Lista de usuarios</a></button>
                 </div>
            </div>

            <br>
            <br>

            <div class="row d-flex justify-content-around">
                <div class="col-md-5">
                    <button type="button" class="boton btn btn-outline-warning"><a href="/administrador/listadeadministradores">Administradores</a></button>
                 </div>
                 <div class="col-md-5">
                    <button type="button" class="boton btn btn-outline-success"><a href="/administrador/listadesecciones">Secciones</a></button>
                 </div>
            </div>
                 
        </div>

@endsection
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>