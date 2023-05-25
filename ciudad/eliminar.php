<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'conexion.php';
        $id = $_POST["id"];
        $my_query = "UPDATE ciudad SET activo = 3 WHERE id =".$id;
        $result = $mysql->query($my_query);

        if($result == true){
            echo 'Registro Eliminado con Exito';
        } else { 
            echo 'error';
        }
    } else {
        echo 'conexion existosa';
    }

?>