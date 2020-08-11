<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ELECTRONICA | FEQUISO</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="all.js"></script>
  </head>
  <body>
    <head>
      <br>
      <br>
      <img src="imagenes/user.png" alt="" width="200" height="200">
    </head>
      <h1>INICIAR SESIÓN</h1>

        <form  action="script.php" method="post">
          <input  required="" type="text" name="correo"  placeholder="usuario">
          <input  required=""  type="password" name="contraseña"  placeholder="contraseña">
          <p class="alert"></p>
          <input   type="submit" name="" value="INGRESAR">
        </form>

      <form  action="registrate.php" method="post">
        <input   type="submit" name="" value="REGISTRARSE">
      </form>
      <!--<form  action="registrate.php" method="post">
        <input   type="submit" name="" value="olvide mi contraseña">
      </form> -->
  </body>
</html>
