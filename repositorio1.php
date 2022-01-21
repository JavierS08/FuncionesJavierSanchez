<?php
function primeraMayuscula($dato){
    //retorna el sato con la primera letra en mayúscula
   return ucfirst("$dato");
}

function reemplazar($valorBuscado,$valorReemplazar){
    //le das que buscas una a, y que muestre una e 

    return str_replace($valorBuscado,$valorReemplazar,"mi moto alpina derrapante");
}
    function mostrarMes($fecha){
        //envias la fecha y me retornas el mes en castellano
        $day = $fecha[0].$fecha[1];
        $month = $fecha[3].$fecha[4];
        $year = $fecha[6].$fecha[7];
        setlocale(LC_TIME, 'spanish');
        echo strftime("%B", gmmktime(0,0,0,$month,$day,$year)).'<br/>';
}

function info(){
    //muestre la versión php y la versión del servidor
    return "La versión actual de PHP es ".phpversion()." y la versión de Apache es ".apache_get_version();
}

    function numeroPrimo($numero){
          //retorna si el numero introducido es primo o no
        $conting=0;
        for($i=1;$i<=$numero;$i++){
            $division=$numero/$i;
            if($numero%$i==0){
                $conting++;
            }
        }
        if ($conting>2){
            echo "El número ".$numero. " no es primo";
        }
        else{ 
            echo "El número ".$numero. " es primo";
        }
}

function bisiesto($año){
    //retorna si el año es bisiesto o no
    return (date('L',strtotime("$año-05-04"))? "El año $año es bisiesto" : "El año $año es no bisiesto");
}