<?php

if(isset($_GET["guardar"])){

    $nombre = $_GET["nombre"];
    $correo = $_GET["correo"];
    $fechai = $_GET["fechai"];
    $fechas = $_GET["fechas"];
    $edad = $_GET["edad"];
    $f = $_GET["f"];
    $ff = $_GET["ff"];

 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1">
    <meta name="description" content="Prácticas de la Unidad 2 de la materia de Programación Web">
    <meta name="author" content="Alexa">
    <meta name="keywords" content="Programación Web">
    <link rel="stylesheet" type="text/css" href="estilos/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
   
    <title>Datos</title>
</head>
<body>
    <div class="col-md-5 offset-3">
        <h2>Datos</h2><br>
        <label for="">Nombre</label><br>
        <?php echo $nombre?><br>
        <label for="">correo</label><br>
        <?php echo $correo?><br>
        <label for="">Fecha de Ingreso</label><br>
        <?php echo $fechai?><br>
        <label for="">Fecha de salida</label><br>
        <?php echo $fechas?><br>
        <label for="">Edad</label><br>
        <?php echo $edad?><br>
        <?php echo $f?><br>
        <?php echo $ff?><br>


    </div>




</body>



