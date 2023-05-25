<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        require_once 'conexion.php';
        $nombre= $_POST["nombre"];
        $apellido=$_POST["apellido"];
        $cargo= $_POST["cargo"];
        $salario=$_POST["salario"];
        $my_query = "insert into empleado(nombre, apellido, cargo, salario) values ('".$nombre."', '".$apellido."', '".$cargo."', '".$salario."')";
        $result = $mysql->query($my_query);
        if ($result == true) {
            echo "Realizado con exito";
        }else{
            echo "error";
        }
    }
?>