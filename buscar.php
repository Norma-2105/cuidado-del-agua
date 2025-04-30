<?php
include("conexion.php");
$sql = "SELECT * from aguaa";
$resultado = mysqli_query($conexion, $sql);
$datos = [];

if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $datos[] = $fila;
    }

    echo json_encode($datos);
} else {
    echo "No hay registros";
}
?>