<!DOCTYPE html>
<html>
  <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/valida_registro.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include "newphp/menu.php" ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Iniciar Sesión</h2>

          <form role="form" name="login" action="newphp/login.php" method="post">
            <div class="form-group">
              <label for="username">Correo Electrónico</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="ingresa tu correo">
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="ingresa tu contraseña">
            </div>
            <button type="submit" class="btn btn-default" >Iniciar Sesión</button>
          </form>
        </div>
      </div>
    </div>
    <script src="js/valida_login.js"></script>
  </body>
</html>
