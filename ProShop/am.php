
<?php
session_start();
if(!isset($_SESSION["admin_id"]) || $_SESSION["admin_id"]==null){
	print "<script>alert(\"Acceso inválido!\");window.location='login.php';</script>";

}
?><!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/valida_registro.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php include "newphp/ma.php" ?>
  <br><br>
  <?php
ob_start();
include("conexion.php");
$ID = $_GET["ID"];

$consultas = mysql_query("SELECT * FROM userr WHERE id='".$ID."'", $cone) or die(mysql_error());

		while($filax = mysql_fetch_array($consultas))
		{
			$user=$filax['fullname'];
			$pass=$filax['username'];
			$pass1=$filax['email'];
			$pass2=$filax['password'];
			$pass3=$filax['admin'];


		}

if(isset($_POST['modificar']))
{
	if(isset($_POST['user2']) && !empty($_POST['user2']) &&
	isset($_POST['pass2']) && !empty($_POST['pass2'])&&isset($_POST['pass3']) && !empty($_POST['pass3'])&&isset($_POST['pass4']) && !empty($_POST['pass4'])&&isset($_POST['pass5']) && !empty($_POST['pass5']))
	{
		$usuario2 = $_POST['user2'];
		$pass2 = $_POST['pass2'];
		$pass3 = $_POST['pass3'];
		$pass4 = $_POST['pass4'];
		$pass5 = $_POST['pass5'];


	mysql_query("UPDATE userr SET fullname = '$usuario2', username = '$pass2',email ='$pass3',password ='$pass4', admin='$pass5' WHERE id = '$ID'", $cone) or die(mysql_error());

		header('refresh: 1; url=modi.php');

		echo "<p style='color:green;'>MODIFICACIÓN REALIZADA CON EXITO</p>";
	}
	else
	{
		echo "error";
	}
}
?>
<div class="container">
  <h2 style="margin-left=300px;">Modificar</h2>
<div style="position:absolute;top:30%;left:550px;" class="row">

<div class="col-md-6">


<form name="formulario" method="post" action="">
  <div class="form-group">
    <label for="username">Nombre:</label>
    <input placeholder="" type="text" name="user2" value="<?php echo $user;?>" maxlength="30" size="40">
</div>
<div class="form-group">
  <label for="username">Usuario:</label>
    <input placeholder="" value="<?php echo $pass;?>" type="text" name="pass2" maxlength="30" size="40">
    </div>
    <div class="form-group">
      <label for="username">Email:</label>
	<input placeholder="" value="<?php echo $pass1;?>" type="text" name="pass3" maxlength="30" size="40">
  </div>
  <div class="form-group">
    <label for="username">Contraseña</label>
	<input placeholder="" value="<?php echo $pass2;?>" type="text" name="pass4" maxlength="30" size="40">
  </div>
  <div class="form-group">
    <label for="username">Administrador</label>
	<input placeholder="" value="<?php echo $pass3;?>" type="text" name="pass5" maxlength="30" size="40">
  </div>

    <input  type="submit"  value="Modificar" name="modificar">

</form>
</div>
</div>
</div>
  </body>
</html>
