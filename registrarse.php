<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nuevo usuario</title>
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
          
          $('#formulario2').on("submit",function(e){
              e.preventDefault();
              var parametros = $(this).serialize();

              $.ajax({
                url:"datosderegistro.php",
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
            <h2>Registro de nuevo <span>usuario</span></h2>
    </div>
    <form method="post" id="formulario2" >
      

        <div class="form-group">
        <label for="inputUsuario" class="sr-only">Usuario</label>
        <input type="text" name="usuario" id="inputUsuario" class="form-control" placeholder="Ingrese un nombre de usuario" required autofocus>
        <small id="userlHelp" class="form-text text-muted"></small>  
        </div>
        <div class="form-group">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" name="contraseña" id="inputContraseña" class="form-control" placeholder="Ingrese una contraseña" required>
        </div>
        <div>
        <button type="submit" class="btn btn-primary">Registrar nuevo usuario</button>
       </div>
       <br>
       <div>
       <a href="login.php" class="btn btn-primary">Iniciar sesion</a>
       </div>
      </form>
      <?php 
      
    ?>
    </body>
 </html>
