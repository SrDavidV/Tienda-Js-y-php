<?php
  $user = $_POST['user'];
  $contraseña = $_POST['clave'];

  session_start();
  error_reporting(0);
  $varsesion = $_SESSION['usuario'];
  $password = $_SESSION['password'];
  $nacimiento = $_SESSION['age'];
  $gender = $_SESSION['genero'] ;
  $client = $_SESSION['tipoc'] ;
  $company = $_SESSION['empresa'] ;
  $sons = $_SESSION['sons'];


 if($user === $varsesion && $contraseña === $password){
    header("Location:https://localhost/store/php/compras.php");
  }else{
    header("Location:https://localhost/store/html/incorrect.html");
  } 

  if($varsesion == null || $varsesion == ''){
    header("Location:https://localhost/store/html/error403.html");
    die();
  }

  get_cart();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda Tola</title>
</head>
<body>

</body>
</html>