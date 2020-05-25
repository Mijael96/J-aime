@extends("plantillaadmin")
@section("principal")

<div class="iniciosesion">
          <h3>Iniciar Sesión</h3>
          <br>
          <br>

          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Usuario</label>
              <input type="text" style="width: 750px; margin: 0 auto;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de usuario">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="password" style="width: 750px; margin: 0 auto;" class="form-control" id="exampleInputPassword1" placeholder="contraseña">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
          </form>
        </div>

@endsection
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>