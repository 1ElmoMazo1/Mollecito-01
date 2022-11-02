<?php
    if(!empty($_POST["registro"])){
        if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["clave"])){
            echo '<script language="javascript">alert("juas");</script>';
        }else{
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $clave=$_POST["clave"];

            $sql=$conexion->query("insert into usuarios (nombre, apellido, clave) values('$nombre', '$apellido', '$clave')");
            if($sql==1){
                window.alert("Bienvenido a nuestro sitio web");
            }else{
                window.alert("ERROR");
            }

        }
    }
?>