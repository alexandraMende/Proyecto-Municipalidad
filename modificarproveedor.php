<?php
	include('basedatos.php');
	
	$id = $_GET['id'];
	
	$query="SELECT * FROM proveedores WHERE idproveedor = $id";
	$result= mysqli_query($conexion,$query);
	$mostrar = $result->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
	<title>Modificar registro</title>
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

<div class="container">
    <h1 align="center">Modificar registro</h1>
			
			<form class="form-horizontal" method="POST" action="actualizarproveedor.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $mostrar['nombre']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="idproveedor" name="idproveedor" value="<?php echo $mostrar['idproveedor']; ?>" />
				
				<div class="form-group">
					<label for="apellido" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<input type="txt" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo $mostrar['apellido']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="empresa" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<input type="txt" class="form-control" id="empresa" name="empresa" placeholder="Empresa" value="<?php echo $mostrar['empresa']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="nit" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<input type="nit" class="form-control" id="nit" name="nit" placeholder="Nit" value="<?php echo $mostrar['nit']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<input type="txt" class="form-control" id="direccion" name="direccion" placeholder="Direccion" value="<?php echo $mostrar['direccion']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $mostrar['email']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="listaempleados.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>