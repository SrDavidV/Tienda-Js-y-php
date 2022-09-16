<?php

 
  session_start();
  error_reporting(0);
  $varsesion = $_SESSION['usuario'];
  $password = $_SESSION['password'];
  $nacimiento = $_SESSION['age'];
  $gender = $_SESSION['genero'] ;
  $client = $_SESSION['tipoc'] ;
  $company = $_SESSION['empresa'] ;
  $sons = $_SESSION['sons'];


  if($client == 'Frecuente'){
    $iva = 0;
  }else if($client == 'Coorporativo'){
    $iva = 19;
  }else if($client == 'Tercera Edad'){
    $iva = 0;
  }else if($client == 'Gestante'){
    $iva = 9.5;
  }
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://localhost/store/css/nomalize.css">
     <!--Css-->  
    <link rel="stylesheet" href="https://localhost/store/css/nomalize.css">
    <link rel="stylesheet" href="https://localhost/store/css/compras.css">
   <!--Bootstrap Icons-->
  <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">


  <title>Tienda Tola</title>
</head>
<body>
  <header>
    <div class="logo">
    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>
    <h1 class="message">Tienda Tola</h1>
    </div>
    <div class="header__welcome">
      <p class="welcome">Bienvenidx <?php echo $varsesion?></p>
      <a href="cerrar_sesion.php">Cerrar Sesión</a>
    </div>
  </header>
  
  <div class="compras">
  <div class="container" id="grilla">
</div>
  <div class="cart">
    <h1 class="title__cart">Carrito</h1>
    <form action="factura.php" method="post" class="formulario" id="formulario">
    <table>
      <thead>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Precio </th>
      </thead>
      
      <tbody id="comida">
        
      </tbody>
    </table>
    <div class="resultado">
        <label>Subtotal</label>
        <label id="result" name="subtotal"></label>
    </div>
    <hr>
    <div class="resultado">
        <label>Iva</label>
        <label id="result" class="iva" name="iva"><?php echo $iva.'%' ?></label>
    </div
    <hr>
    <div class="resultado">
        <label>Total</label>
        <label id="result" class="total" name="total"></label>
    </div>
    <hr>
    <input class="pagar" type="submit" value="Pagar Ahora"/>
  </div>
</form>
  </div>
 
  <script
			  src="https://code.jquery.com/jquery-3.6.1.min.js"
			  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
			  crossorigin="anonymous"></script>
  <script src="../js/carrito.js"></script>
  <script src="../js/compra.js"></script>
</body>
</html>