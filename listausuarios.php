<?php
  include ("basedatos.php")
?>

<!doctype html>
<html lang="es">
  <head>
      <title>Lista de usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"   integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="   crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="empleado.css">

  </head>
  <body>
    
        <div class="container">
        <div class="form_top">
    <h1 align="center">Lista de usuarios</h1>
      <br>
      <table class="table table-striped">
          <thead>
          <tr>
              <td scope="col"><strong>Idlogin</strong></td>
              <td scope="col"><strong>Usuario</strong></td>
              <td scope="col"><strong>Contraseña</strong></td>
              <td scope="col"><strong>Estado</strong></td>
              <td scope="col"><strong>Idempleado</strong></td>
          </tr>
          </thead>
          <tbody>
          <?php
          $sql="SELECT * FROM login";
          $result= mysqli_query($conexion,$sql);
          
          while($mostrar=mysqli_fetch_array($result)){
          ?>
          <tr>
              <td scope="row"><?php echo $mostrar['idlogin'] ?></td>
              <td><?php echo $mostrar['usuario'] ?></td>
              <td><?php echo $mostrar['contraseña'] ?></td>
              <td><?php echo $mostrar['estado'] ?></td>
              <td><?php echo $mostrar['idempleado'] ?></td>
          </tr>

          <?php
          }
          ?>
          </tbody>
      </table>
  </body>
  </html>