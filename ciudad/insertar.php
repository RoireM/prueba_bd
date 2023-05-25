<?php

    if($_SERVER["REQUEST_METHOD"]== "POST"){
        require_once 'conexion.php';
        $nombre= $_POST["nombre"];
        
        $my_query = "INSERT INTO ciudad(nombre, activo) VALUES ('".$nombre."', 1)";
        $result = $mysql->query($my_query);
        if ($result == true) {
            echo "Realizado con exito";
        }else{
            echo "error";
        }
    }
?>