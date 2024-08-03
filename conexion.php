<?php

$host = "localhost";
$user = "root";
$pass = "";

$db = "libreria";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    echo "coneccion fallida";
}

?>