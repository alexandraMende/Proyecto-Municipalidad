<?php
  include ("basedatos.php");
?>

<!doctype html>
<html lang="es">
  <head>
      <title>Usuarios</title>
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
<body>
<div class="container">
        <div class="form_top">
    <h1 align="center">Usuarios</h1>
    
			<div class="row">
			</div>
      <br>
      <table class="table table-striped">
          <thead>
          <tr>
              <td scope="col"><strong>Idlogin</strong></td>
              <td scope="col"><strong>Usuario</strong></td>
              <td scope="col"><strong>Contraseña</strong></td>
              <td scope="col"><strong>Estado</strong></td>
              <td scope="col"><strong>Idempleado</strong></td>
              <td scope="col"><strong>Modificar</strong></td>
              <td scope="col"><strong>Eliminar</strong></td>
          </tr>
          </thead>
          <tbody>
          <?php
          $sql="SELECT * FROM login";
          $result= mysqli_query($conexion,$sql);
          
          while($mostrar=mysqli_fetch_array($result)){
          ?>
          <tr>
              <th scope="row"><?php echo $mostrar['idlogin'] ?></th>
              <td><?php echo $mostrar['usuario'] ?></td>
              <td><?php echo $mostrar['contraseña'] ?></td>
              <td><?php echo $mostrar['estado'] ?></td>
              <td><?php echo $mostrar['idempleado'] ?></td>
              <td><a href="modificarlogin.php?id=<?php echo $mostrar['idlogin']; ?>"><span class="icon-pencil"></span></a></td>
              <td><a href="#" data-href="eliminarlogin.php?id=<?php echo $mostrar['idlogin']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="icon-trash"></span></a></td>
          </tr>

          <?php
          }
          ?>
          </tbody>
      </table>
     <!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
  </body>
  </html>