<?php
include('conexion_bd.php');
    if(!empty($_POST["registroM"])){

        
        if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["edad"]) or empty($_POST["dni"]) or empty($_POST["telefono"]) or empty($_POST["rol"])){
           
        }else{
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $edad=$_POST["edad"];
            $dni=$_POST["dni"];
            $telefono=$_POST["telefono"];
            $rol=$_POST["rol"];
            //$clave=$_POST["clave"];

            $sql=$conexion->query("insert into admin (nombre, apellido,edad,dni,telefono,rol) values('$nombre', '$apellido','$edad','$dni','$telefono','$rol')");
            if($sql==1){
                header("location:usuario.php");
            }else{
                echo "ingreso erroneo";
            }

        }
    }
?>