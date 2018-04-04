<?php
  //Esta linea verifica que si no hay un parametro en GET con la carpeta actual lo redireccione a home:
  if(!isset($_GET['carpeta']))
    header("location: index.php?carpeta=home");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dropbocs</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script defer src="js/fontawesome-all.js" crossorigin="anonymous"></script>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="#">Dropbocs</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <img src="img/head.jpg">
        <h1>Dropbocs</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <input type="text" id="txt-carpeta-actual" class="form-control" value="<?php echo isset($_GET['carpeta'])?$_GET['carpeta']:''; ?>" disabled>

        <table class="table table-striped table-hover text-left">
          <thead>
            <tr>
              <th>Archivo</th>
              <th>Ultima modificación</th>
              <th>Usuario</th>
              <th>Tamaño</th>
            </tr>
          </thead>
          <tbody>


          </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-carpeta">Crear carpeta</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-archivo">Ingresar archivo</button>
      </div>

    </main><!-- /.container -->


    <!-- Ventanas modales -->

    <!-- Crear carpeta -->
    <div class="modal fade" id="modal-carpeta" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Crear carpeta</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input id="nombre-carpeta" type="text" class="form-control" placeholder="Nombre carpeta">
            <input id="fecha-creacion" type="text" class="form-control" placeholder="Fecha creacion">
            <input id="fecha-modificacion" type="text" class="form-control" placeholder="Fecha modificacion">
            <input id="usuario" type="text" class="form-control" placeholder="Usuario">
            <input id="tamanio" type="text" class="form-control" placeholder="Tamaño">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button id="crear-carpeta" type="button" class="btn btn-primary">Crear carpeta</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Crear archivo -->
    <div class="modal fade" id="modal-archivo" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Crear archivo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input id="nombre-archivo" type="text" class="form-control" placeholder="Nombre archivo">
            <input id="fecha-creacion-archivo" type="text" class="form-control" placeholder="Fecha creacion">
            <input id="fecha-modificacion-archivo" type="text" class="form-control" placeholder="Fecha modificacion">
            <input id="usuario-archivo" type="text" class="form-control" placeholder="Usuario">
            <input id="tamanio-archivo" type="text" class="form-control" placeholder="Tamaño">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button id="crear-archivo" type="button" class="btn btn-primary">Crear archivo</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Detalle registro de archivo -->
    <div class="modal fade" id="modal-detalle" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div id="modal_detalle" class="modal-content">
                   <div  class="modal-header">
            <h5 class="modal-title">Detalle archivo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="detalles" class="modal-body">
            <table class="table table-sm">
                  <thead class="thead-light">
                    <tr>
                      <th>Archivo</th>
                      <th>Ultima modificación</th>
                      <th>Usuario</th>
                      <th>Tamaño</th>
                    </tr>
                  </thead>
                  <tbody id="tbody-detalles">
                    
                  </tbody>
                </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
  </body>
</html>
