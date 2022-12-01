<?php

    function conectar()
    {
        $user="root";
        $pass="";
        $server="localhost";
        $db="pag_uni";
        $con=mysqli_connect($server,$user,$pass,$db) or die ("Error en la conexion de base de datos".mysqli_connect_error());
        return $con;
    }
?>