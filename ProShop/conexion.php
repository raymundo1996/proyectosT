<?php
$hostdb="localhost";
$userdb="root";
$password="";
$db="myapp";

$cone=mysql_connect($hostdb,$userdb,$password);

if (!$cone)
 {
  die("Error con la conexión de la base de datos myapp: " .mysql_error());# code...

}
mysql_select_db($db,$cone);
?>
