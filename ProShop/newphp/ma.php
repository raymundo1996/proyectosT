
<?php
//session_start();
 ?>
<div class="container-fluid" style="background:black; color:white;">
<div class="container text-center">
  <FONT FACE="small fonts"><h1>RayShoes</h1></FONT>




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
        <li class="active"><a href="ra.php"style="color:white;">Altas</a></li>
        <li><a href="adminbaja.php"style="color:white;">Bajas</a></li>
        <li><a href="modi.php"style="color:white;">Modificación de usuarios</a></li>


      </ul>
        <!-- Trigger the modal with a button -->
      <ul class="nav navbar-nav navbar-right">
        <?php if(!isset($_SESSION["user_id"])):?>

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

        <li><a href="./newphp/logout.php"style="color:white;"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
      <?php endif;?>
      </ul>

</nav>
