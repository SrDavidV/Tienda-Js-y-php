<?php

session_start();
$user = $_POST['usuario'];
$password = $_POST['password'];
$nacimiento = $_POST['age'];
$gender = $_POST['genero'];
$client = $_POST['tipoc'];
$company = $_POST['empresa'];
$sons = $_POST['sons'];

$_SESSION['usuario'] = $user;
$_SESSION['password'] = $password;
$_SESSION['age'] = $nacimiento;
$_SESSION['genero'] = $gender;
$_SESSION['tipoc'] = $client;
$_SESSION['empresa'] = $company;
$_SESSION['sons'] = $sons;

header("Location:https://localhost/store/index.html"); 

?>

<!DOCTYPE html>
<html lang="es">
<body>

</body> 
</html>