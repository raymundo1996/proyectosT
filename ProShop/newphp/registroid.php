<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conect.php";

			$found=false;
			$sql1= "select * from userr where username=\"$_POST[username]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.php';</script>";
			}
			$sql = "insert into userr(username,fullname,email,password,created_at) value (\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[email]\",\"$_POST[password]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				session_start();
				$_SESSION["user_id"]=$_POST["username"];
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../inicio.php';</script>";
			}
		}
	}
}



?>
