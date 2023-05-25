<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'conexion.php';
        $id = $_POST["id"];
        $nombre= $_POST["nombre"];
        $apellido=$_POST["apellido"];
        $cargo= $_POST["cargo"];
        $salario=$_POST["salario"];

        $my_query = "update empleado set nombre= '".$nombre."', apellido= '".$apellido."', cargo= '".$cargo."', salario= '".$salario."' where id=".$id;
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