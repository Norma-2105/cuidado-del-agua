<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "cuidadoss";

$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

if(!$conexion) {
    die("Error de conexion: ".mysqli_connect_error());

}

?>