<?php
//session_start();
 ?>
<div class="container-fluid" style="background:black; color:white;">
<div class="container text-center">
  <FONT FACE="small fonts"><h1>RayShoes</h1></FONT>


  <form class="navbar-form navbar-center">
    <center>
  <div class="form-group">

  <input style="width:170%;" type="text" class="form-control" placeholder="Buscar">
  </div>
  <button style="margin-left:100px;font-size:14px;" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
</center>
  </form>

</div>
</div>

<nav class="navbar  "style="background:orange; text-color:white;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style="color:white;"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="hombres.php"style="color:white;"> Hombres</a></li>
        <li><a href="mujeres.php" style="color:white;"> Mujeres</a></li>
        <li><a href="lanza.php" style="color:white;"> Lanzamientos</a></li>
        <li><a href="ofertas.php" style="color:white;"> Oferta</a></li>

      </ul>
        <!-- Trigger the modal with a button -->
      <ul class="nav navbar-nav navbar-right">
        <?php if(!isset($_SESSION["user_id"])):?>
        <li><a href="./registro.php" style="color:white;"><span class="glyphicon glyphicon-user"></span> Registrar</a></li>
        <li><a href="./login.php" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesiòn</a></li>
        <li><a href="#" style="color:white;"><span class="glyphicon glyphicon-shopping-cart"></span>  Carrito</a></li>
      <?php else: $usuario =  $_SESSION["user_id"];?>
        <!-- <div id="login" align="right">
          <p>Bienvenido
          <?php
           //include "conect.php"
            //session_name("username");

           ?>
          </p>
        </div> -->
        <!-- <li>
          <label for="foto"></label>
          <input type="file" name="magen" id="imagen" required>
        </li> -->
        <!-- <img src="<? echo $_SESSION['imagen'];?>" /> -->
        <li><a href="#"style="color:white;"><?php echo $usuario;  ?> </a></li>
        <li><a href="#"style="color:white;"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
        <li><a href="./newphp/logout.php"style="color:white;"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
      <?php endif;?>
      </ul>

</nav>
