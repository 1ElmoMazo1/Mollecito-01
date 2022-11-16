<?php
    if(!empty($_POST["registro"])){

        
        if (empty($_POST["nombre"]) or empty($_POST["apellido"]) ){
           
        }else{
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            //$clave=$_POST["clave"];

            $sql=$conexion->query("insert into datos (nombre, apellido) values('$nombre', '$apellido')");
            if($sql==1){
                header("location:principal.php");
            }else{
                echo "ingreso erroneo";
            }

        }
    }
?>