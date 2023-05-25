<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'conexion.php';
        $id = $_POST["id"];
        $nombre= $_POST["nombre"];

        $my_query = "UPDATE ciudad SET nombre= '".$nombre."', activo= 2 WHERE id=".$id;
        $result = $mysql->query($my_query);

        if($result == true){
            echo 'Registro Actualizado con Exito';
        } else { 
            echo 'error';
        }
    } else {
        echo 'conexion existosa';
    }

?>