<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "conect.php";

			$user_id=null;
			$sql1= "select * from userr where (username=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["username"];
        $admin_id=$r["admin"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso inválido.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				$_SESSION["admin_id"]=$admin_id;
				if ($admin_id=="admin")
				{
					print "<script>window.location='../admin.php';</script>";
				}
				else {
					print "<script>window.location='../inicio.php';</script>";# code...
				}

			}
		}

	}
}



?>
