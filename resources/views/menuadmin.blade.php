@extends("plantillaadmin")
@section("principal")

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Menu') }}</h3></div >
                    <div class="card-body">
                        <form action="/administrador/listaproductos"><input type="submit" style="width:100%" value="Lista de Productos" /> </form>
                    </div>
                        
                    <div class="card-body">
                        <form action="/administrador/listadeusuario"><input type="submit" style="width:100%" value="Lista de Usuarios" /> </form>
                    </div>
                        
                    <div class="card-body">
                        <form action="/administrador/listadesecciones"><input type="submit" style="width:100%" value="Secciones" /> </form>
                    </div>
                </div>
             </div>
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