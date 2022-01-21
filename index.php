<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Ejemplos con funciones y Estructuras de control</h2> 
    <?php
    require_once("repositorio1.php");
    $mensajeMayus=primeraMayuscula("mi moto alpina derrapante");
    echo $mensajeMayus;
    echo"<br>";
    $letrmes=mostrarMes("01/10/2010");
    echo $letrmes;
    $version=info();
    echo $version;
    echo"<br>";
    $reemp=reemplazar("a","e");
    echo $reemp;
    echo"<br>";
    $prim=numeroPrimo(11);
    echo $prim;
    echo"<br>";
    $bis=bisiesto(2013);
    echo $bis;
    ?>
</body>
</html>
