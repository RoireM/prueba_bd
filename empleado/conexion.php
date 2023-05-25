<?php

$mysql = new mysqli("localhost", "root", "", "prueba_db");
if($mysql->connect_error){
    echo"Error: ";
    die("error de conexion");
}
else{
    echo"Conexion exitosa";
}
?>