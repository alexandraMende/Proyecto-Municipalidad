<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nuvo empleado</title>
    <link rel="shortcut icon" href="img/logo.png">
    <script   src="https://code.jquery.com/jquery-3.5.1.min.js"   integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="   crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="icomoon (2)/style.css">
   
    </head>
    <script>
      $(document).ready(function(){
          $('.alert').alert();
          
          $('#formulario1').on("submit",function(e){
              e.preventDefault();
              var parametros = $(this).serialize();

              $.ajax({
                url:"agregarproveedor.php",
                type:"POST",
                data: parametros, 
               beforeSend: function(){
                 console.log("cargando....");
               },
               success:function (echo){
                 console.log("cargo!")
                 alert(echo);
               }
              });
  
          });
      });
  </script>
    <body background="img/logo.png">
    <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="collapse navbar-collapse" id="navbarCollapse">
  <ul class="navbar-nav mr-auto">
  
    <li class="cerrar-sesion"><a href="logaut.php"><span class="icon-remove-user"></span></a></li>
        

        <li class="nav-item">
          <a class="nav-link " href="marcas.php">Ingresar una nueva Marca</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="listademarcas.php">Lista de Marcas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="ingresodeproductos.php">Agregar un producto nuevo</a>
        </li>
       <li class="nav-item">
          <a class="nav-link " href="listadeproductos.php">Lista de Productos</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link " href="nuevoproveedor.php">Agregar un nuevo proveedor</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link " href="listaproveedores.php">Lista de Proveedores</a>
        </li>       
      </ul>
    </div>
  </nav>
</header>

      <div class="container">
        <div class="form_top">
            <h2>Nuevo <span>Proveedor</span></h2>
    </div>
    <form method="post" id="formulario1" >
      

        <div class="form-group">
        <label for="inputNombre" class="sr-only">Nombre</label>
        <input type="text" name="nombre" id="inputNombre" class="form-control" placeholder="Ingrese nombre" required autofocus>
        <small id="userlHelp" class="form-text text-muted"></small>  
        </div>
        <div class="form-group">
        <label for="inputApellido" class="sr-only">Apellido</label>
        <input type="text" name="apellido" id="inputApellido" class="form-control" placeholder="Ingrese Apellido" required>
        </div>
        <div class="form-group">
        <label for="inputEMPRESA" class="sr-only">Empresa</label>
        <input type="text" name="empresa" id="inputEMPRESA" class="form-control" placeholder="Ingrese Empresa" required>
        </div>
        <div class="form-group">
        <label for="inputNIT" class="sr-only">NIT</label>
        <input type="number" name="nit" id="inputNIT" class="form-control" placeholder="Ingrese NIT" required>
        </div>
        <div class="form-group">
        <label for="inputDireccion" class="sr-only">Direccion</label>
        <input type="text" name="direccion" id="inputDireccion" class="form-control" placeholder="Ingrese Direccion" required> 
        </div>
        <div>
        <button type="submit" class="btn btn-primary">Registrar</button>
       </div>
      </form>
    </body>
 </html>
