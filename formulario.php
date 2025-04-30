<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLANTILLA</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
    <div class="contenedor">
        <div class="encabezado">
            <div class="a1">
            </div>
            <div class="a1"> <a href="plantilla.html"><h2>Consumo de agua para promover estrategias que vinculen el cuidado del medio ambiente con salud personal y colectivo.</h2></a></div>
            <div class="a2"> <a href="principal1.html">Encuesta</a></div>
            <div class="a3"> <a href="principal.html">Frases motivacionales</a></div>
            <div class="a4"> <a href="datos.html">Datos </a></div>
        </div>

        <div class="cuerpo">
           <?php

             include("conexion.php");
           $nom=$_POST["txtNombre"];
           $vasos=$_POST["txtVasos"];

           $sql="INSERT into aguaa values('$nom','$vasos')";
           if (mysqli_query($conexion,$sql)) {
            echo"Registro insertado correctamente";
        }else{ 
            echo"Error: ".mysqli_error($conexion);
        }
    
        echo"<br> $nom toma $vasos vasos de agua al día"
        ?>

           
        </div>
        <div class="pie">Datos de contacto </div>
    </div>
</body>
</html
