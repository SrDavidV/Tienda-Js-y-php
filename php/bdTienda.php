<?php

  $server = "localhost";
  $user = "root";
  $password = "david123";
  $database = "tiendatola";

  $connection = new mysqli($server, $user, $password, $database);

  if($connection-> connect_error){
    die("Conexión fallidad: " . $connection->connect_error);
  }

/*   $sql = "CREATE DATABASE TiendaTola";
  if($connection->query($sql) === true){
    echo "Base de datos creada correctamente";
  }else{
    die ("Error al crear la base de datos: " . $connection->error);
  }
 */

 $sql = "CREATE TABLE TIPOCLIENTE(IDTIPO INT PRIMARY KEY IDENTITY,TIPO VARCHAR(50) NOT NULL)";

 if($connection-> query($sql) === true){
  echo "La consulta se realizo correctamente...";
 }else{
  die ("Error al crear tabla: " . $connection-> error);
 }



?>