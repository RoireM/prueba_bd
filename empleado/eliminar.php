<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'conexion.php';
        $id = $_POST["id"];
        $my_query = "delete from empleado where id =".$id;
        $result = $mysql->query($my_query);

        if($result == true){
            echo 'Registro Eliminado con Exito';
        } else { 
            echo 'error';
        }
    } else {
        echo 'Conexion existosa';
    }

?>