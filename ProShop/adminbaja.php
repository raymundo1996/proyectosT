
<?php
session_start();
if(!isset($_SESSION["admin_id"]) || $_SESSION["admin_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";

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
		<link rel="stylesheet" href="TU.css">
  </head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php include "newphp/ma.php" ?>
  <?php
ob_start();
include("conexion.php");


		$consulta = mysql_query("SELECT * FROM userr", $cone) or die(mysql_error());

?>

			<table class="table table-hover table-striped"  style="position:absolute;top:30%;left:1px;"width="50%" border="2">
            <tr>
				<th>Nombre</th>
				<th>Usuarios</th>
				<th>Email</th>
				<th>Contraseña</th>
				<th>Administrador</th>
				<th>Hora/Fecha</th>
				<th>Eliminar</th>
			  </tr>
<?php

		while($filas = mysql_fetch_array($consulta))
		{
			$IDu=$filas['id'];
			$pass2=$filas['fullname'];
	        $pass1=$filas['username'];
			$user=$filas['email'];
			$pass=$filas['password'];
			$pass3=$filas['admin'];
			$pass4=$filas['created_at'];

?>
			  <tr>
					<td><?php echo "<p style='color:black;'>".$pass2."</p>";?></td>
					<td><?php echo "<p style='color:black;'>".$pass1."</p>";?></td>
				<td><?php echo "<p style='color:black;'>".$user."</p>";?></td>
				<td><?php echo "<p style='color:blacks;'>".$pass."</p>";?></td>
				<td><?php echo "<p style='color:black;'>".$pass3."</p>";?></td>
				<td><?php echo "<p style='color:black;'>".$pass4."</p>";?></td>
                <td>
                	<form method="post" action="">
                    	<input type="submit" style="color:black" value="Eliminar" name="eliminar" />
                    </form>
                </td>
			  </tr>
<?php


		}


if(isset($_POST['eliminar']))
{

		mysql_query("DELETE FROM userr WHERE  id = '$IDu'", $cone) or die(mysql_error());

		header('refresh: 2; url=adminbaja.php');

		echo "<p style='color:black;'>ELIMINACION REALIZADA CON EXITO</p>";
}


?>
</table>
  </body>
</html>
