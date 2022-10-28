<?php
include 'basedatos.php';
?>
<!doctype html>
<html lang="en" class="h-100">
<head>
      <title>Buscador de productos</title>
      <link rel="shortcut icon" href="img/logo.png">
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"   integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="   crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="icomoon (2)/style.css">
  </head>
  <body>
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
<body background="img/logo.png">
      <div class="container">
        <div class="form_top">
        </div>
    <form action="" method="get">
    <div class="form-group">
    <label for="inputBuscar" class="buscador">Buscar Producto</label>
    <input type="text" name="buscar" id="buscar" class="form-control" placeholder="Ingrese producto que desea buscar" required autofocus>
    <small id="userlHelp" class="form-text text-muted"></small>  
    </div><br>
    <button type="submit" name="enviar" class="btn btn-primary">Buscar</button>
    </form>

    <br><br><br>
    
    <tbody>
    <?php
    if(isset($_GET['enviar'])) {
        $buscar = $_GET['buscar'];

        $consulta = $conexion->query("SELECT * FROM producto WHERE nombre LIKE '%$buscar%'");

        while ($row = $consulta->fetch_array()){
            echo $row['nombre'].'<br>';
        }
    }
    ?>
</tbody>
</body>
</html>