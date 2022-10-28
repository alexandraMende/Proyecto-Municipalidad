<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio de sesion</title>
    <link rel="shortcut icon" href="img/logo.png">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"   integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="   crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="prueba/main.css">
   
    </head>
   
    <body background="imagenes/fondo8.jpg">
      <div class="container">
        <div class="form_top">
            <br>       
            <h2 align="center">Inicio de sesion</h2>
    </div>
    <form action="session.php" method="post" id="formulario2">
      

        <div class="form-group">
        <label for="inputUsuario" class="sr-only">Usuario</label>
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ingrese su usuario" required autofocus>
        <small id="userlHelp" class="form-text text-muted"></small>  
        </div>
        <div class="form-group">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Ingrese su contraseña" required>
        </div>
        <div>
        <button type="submit" name="submit" class="btn btn-primary">Entrar</button>
       </div>
      </form>
    </body>
 </html>
