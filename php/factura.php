<?php
   session_start();
   
   $varsesion = $_SESSION['usuario'];
   $password = $_SESSION['password'];
   $nacimiento = $_SESSION['age'];
   $gender = $_SESSION['genero'] ;
   $client = $_SESSION['tipoc'] ;
   $company = $_SESSION['empresa'] ;
   $sons = $_SESSION['sons'];

  $subtotal = $_POST['subtotal'];
  $total = $_POST['total'];
  $iva = $_POST['iva'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://localhost/store/css/nomalize.css">
  <link rel="stylesheet" href="/store/factura.css">
 
  <title>Tienda Tola</title>
</head>
<body>
  <div class="container">
    <h1 class="title">Gracias por su compra, vuelva pronto!</h1>
    <div class="factura" id="factura">
    <div class="profile">
      <img class ="userimg" src="https://localhost/store/assets/maleuser.jpg" alt="userimage" />
      <span><?php echo $varsesion?></span>
    </div>
      <div class="factura__section">
        <span>Edad: </span>
        <div class="factura__info">
        <span>28</span>
        </div>
      </div>
      <div class="factura__section">
        <span>Tipo Cliente: </span>
        <div class="factura__info">
        <span>Frecuente</span>
        </div>
      </div>
      <div class="factura__section">
        <span>Subtotal: </span>
        <div class="factura__info">
        <i class="bi bi-cart-check"></i>
        <span><?php echo $subtotal ?></span>
        </div>
      </div>
    <div class="factura__section" id="sons">
        <span>Cant hijos: </span>
        <div class="factura__info">
        <i class="bi bi-cart-check"></i>
        <span>3</span>
        </div>
      </div> 
      <div class="factura__section" id="company">
        <span>Empresa: </span>
        <div class="factura__info">
        <i class="bi bi-cart-check"></i>
        <span>Pragma S.A.S</span>
        </div>
      </div>
      <div class="factura__section">
        <span>Iva cobrado: </span>
        <div class="factura__info">
        <span><?php echo $iva ?></span>
        </div>
      </div>
      <div class="factura__section">
        <span>Descuento: </span>
        <div class="factura__info">
        <span>10000</span>
        </div>
       
      </div>
      <div class="factura__section">
        <span>Total: </span>
        <div class="factura__info">
        <span><?php echo $total ?></span>
        </div>
      </div>
    </div>
  </div>


</body>
</html>