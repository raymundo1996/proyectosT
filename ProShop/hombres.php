<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";

}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include "newphp/menu.php" ?>

	<br><br>

	<div class="container">
	  <div class="row">
	    <div style="border-radius:10px;" class="col-sm-3">
	      <div style="border-radius:10px;" class="panel panel-primary">
	        <div style="border-radius:10px;" class="panel-heading">Nike</div>
	        <div style="border-radius:2px;" class="panel-body"><img src="img\5.jpg" class="img-responsive" style="width:100%; height:98px;" alt="Image"></div>
	        <div  class="panel-footer" style="font-size:25px;text-align:center;">
	        $2400
	        </div>
	        <button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
	        <button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
	        <br>
	      </div>
	    </div>
	    <div style="border-radius:10px;" class="col-sm-3">
	      <div style="border-radius:10px;" class="panel panel-primary">
	        <div style="border-radius:10px;" class="panel-heading">Adidas</div>
	        <div class="panel-body"><img src="img\PORSCHE.jpg" class="img-responsive" style="width:100%; height:98PX;" alt="Image"></div>
	        <div class="panel-footer" style="font-size:25px;text-align:center;">$1600.00</div>
	        <button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
	        <button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
	        <br>
	      </div>
	    </div>
	    <div style="border-radius:10px;" class="col-sm-3">
	      <div style="border-radius:10px;" class="panel panel-primary">
	        <div style="border-radius:10px;" class="panel-heading">Nike Future </div>
	        <div class="panel-body"><img src="img/nike-soccer.jpg" class=" img-responsive" style="width:100%; height:98px;"  alt="Image"></div>
	        <div class="panel-footer" style="font-size:25px;text-align:center;">$3000.00</div>
	        <button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
	        <button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
	        <br>
	      </div>
	    </div>

	  <div style="border-radius:10px;" class="col-sm-3">
	    <div style="border-radius:10px;" class="panel panel-primary">
	      <div style="border-radius:10px;" class="panel-heading">Adidas </div>
	      <div class="panel-body"><img src="img\888.jpg" class="img-responsive"style="width:110%; height:98px;" alt="Image"></div>
	      <div class="panel-footer" style="font-size:25px;text-align:center;">$2400.00</div>
	      <button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
	      <button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
	      <br>
	    </div>
	  </div>


				<div style="border-radius:10px;" class="col-sm-3">
					<div style="border-radius:10px;" class="panel panel-primary">
						<div style="border-radius:10px;" class="panel-heading">Adidas</div>
						<div class="panel-body"><img src="img\hombre2.png" class="img-responsive" style="width:100%; height:98PX;" alt="Image"></div>
						<div class="panel-footer" style="font-size:25px;text-align:center;">$1600.00</div>
						<button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
						<button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
						<br>
					</div>
				</div>



				<div style="border-radius:10px;" class="col-sm-3">
					<div style="border-radius:10px;" class="panel panel-primary">
						<div style="border-radius:10px;" class="panel-heading">Adidas</div>
						<div class="panel-body"><img src="img\hombre1.jpg" class="img-responsive" style="width:100%; height:98PX;" alt="Image"></div>
						<div class="panel-footer" style="font-size:25px;text-align:center;">$1600.00</div>
						<button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
						<button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
						<br>
					</div>
				</div>



				<div style="border-radius:10px;" class="col-sm-3">
					<div style="border-radius:10px;" class="panel panel-primary">
						<div style="border-radius:10px;" class="panel-heading">Adidas</div>
						<div class="panel-body"><img src="img\hombre3.jpg" class="img-responsive" style="width:100%; height:98PX;" alt="Image"></div>
						<div class="panel-footer" style="font-size:25px;text-align:center;">$1600.00</div>
						<button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
						<button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
						<br>
					</div>
				</div>



				<div style="border-radius:10px;" class="col-sm-3">
					<div style="border-radius:10px;" class="panel panel-primary">
						<div style="border-radius:10px;" class="panel-heading">Adidas</div>
						<div class="panel-body"><img src="img\hombre4.jpg" class="img-responsive" style="width:100%; height:98PX;" alt="Image"></div>
						<div class="panel-footer" style="font-size:25px;text-align:center;">$1600.00</div>
						<button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
						<button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
						<br>
					</div>
				</div>



				<div style="border-radius:10px;" class="col-sm-3">
					<div style="border-radius:10px;" class="panel panel-primary">
						<div style="border-radius:10px;" class="panel-heading">Adidas</div>
						<div class="panel-body"><img src="img\hombre5.jpg" class="img-responsive" style="width:100%; height:98PX;" alt="Image"></div>
						<div class="panel-footer" style="font-size:25px;text-align:center;">$1600.00</div>
						<button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
						<button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
						<br>
					</div>
				</div>



				<div style="border-radius:10px;" class="col-sm-3">
					<div style="border-radius:10px;" class="panel panel-primary">
						<div style="border-radius:10px;" class="panel-heading">Adidas</div>
						<div class="panel-body"><img src="img\hombre6.jpg" class="img-responsive" style="width:100%; height:98PX;" alt="Image"></div>
						<div class="panel-footer" style="font-size:25px;text-align:center;">$1600.00</div>
						<button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
						<button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
						<br>
					</div>
				</div>



				<div style="border-radius:10px;" class="col-sm-3">
					<div style="border-radius:10px;" class="panel panel-primary">
						<div style="border-radius:10px;" class="panel-heading">Adidas</div>
						<div class="panel-body"><img src="img\hombre7.jpg" class="img-responsive" style="width:100%; height:98PX;" alt="Image"></div>
						<div class="panel-footer" style="font-size:25px;text-align:center;">$1600.00</div>
						<button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
						<button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
						<br>
					</div>
				</div>


				<div style="border-radius:10px;" class="col-sm-3">
					<div style="border-radius:10px;" class="panel panel-primary">
						<div style="border-radius:10px;" class="panel-heading">Adidas</div>
						<div class="panel-body"><img src="img\hombre8.jpg" class="img-responsive" style="width:100%; height:98PX;" alt="Image"></div>
						<div class="panel-footer" style="font-size:25px;text-align:center;">$1600.00</div>
						<button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
						<button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
						<br>
					</div>
				</div>


				<div style="border-radius:10px;" class="col-sm-3">
					<div style="border-radius:10px;" class="panel panel-primary">
						<div style="border-radius:10px;" class="panel-heading">Adidas</div>
						<div class="panel-body"><img src="img\hombre10.jpg" class="img-responsive" style="width:100%; height:98PX;" alt="Image"></div>
						<div class="panel-footer" style="font-size:25px;text-align:center;">$1600.00</div>
						<button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
						<button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
						<br>
					</div>
				</div>


				<div style="border-radius:10px;" class="col-sm-3">
					<div style="border-radius:10px;" class="panel panel-primary">
						<div style="border-radius:10px;" class="panel-heading">Adidas</div>
						<div class="panel-body"><img src="img\hombre9.jpg" class="img-responsive" style="width:100%; height:98PX;" alt="Image"></div>
						<div class="panel-footer" style="font-size:25px;text-align:center;">$1600.00</div>
						<button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
						<button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
						<br>
					</div>
				</div>


				<div style="border-radius:10px;" class="col-sm-3">
					<div style="border-radius:10px;" class="panel panel-primary">
						<div style="border-radius:10px;" class="panel-heading">Adidas</div>
						<div class="panel-body"><img src="img\nombre9.jpg" class="img-responsive" style="width:100%; height:98PX;" alt="Image"></div>
						<div class="panel-footer" style="font-size:25px;text-align:center;">$1600.00</div>
						<button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
						<button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
						<br>
					</div>
				</div>


				<div style="border-radius:10px;" class="col-sm-3">
					<div style="border-radius:10px;" class="panel panel-primary">
						<div style="border-radius:10px;" class="panel-heading">Adidas</div>
						<div class="panel-body"><img src="img\ofertas1.jpg" class="img-responsive" style="width:100%; height:98PX;" alt="Image"></div>
						<div class="panel-footer" style="font-size:25px;text-align:center;">$1600.00</div>
						<button style="background:#fb3a10;color:white;border-radius:10px;" type="button" class="btn-lg btn-block" name="button">Agregar a carrito<span class="glyphicon glyphicon-shopping-cart"></span></button>
						<button type="button"style="color:white;border-radius:10px;" class="btn btn-info btn-lg btn-block" name="button">Ver más <span class="glyphicon glyphicon-plus"></span></button>
						<br>
					</div>
				</div>

	<br><br>


	<hr>

	 </table>

	<br>
	 <footer class="container text-center">
	   <center>
	   
	<br
	 <p>Copyright - 2000 - 2017 www.RayShoes.com.mx, TODOS LOS DERECHOS RESERVADOS. Las fotos contenidas en este site, el logotipo y las marcas son propiedad de www.RayShoes.com.mx Está prohibida la reproducción total o parcial, sin la expresa autorización de la administradora de la tienda virtual </p>

	 </center>
	 </footer>
</body>
</html>
