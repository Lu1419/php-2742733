<?php

$articulos = '12';

if($articulos>12) {

    echo 'Caja rápida';
}

else if($articulos<12) {

    echo 'Caja normal';
}

$ciudadanos = '18';

if($ciudadanos>18) {

    echo 'Puedes votar';

}

else if($ciudadanos<18) {

    echo 'No puedes votar';
}

$nombre = 'Mario, Carlos';
$edad = '19';

if($nombre == Mario,Carlos) {

    echo 'Puedes entrar al VIP';

}

else if($nombre<>Mario,Carlos) {

    echo 'No puedes entrar';

}

if($edad<19) {

    echo 'Si puedes entrar';
}

else if($edad>19) {

    echo 'No puedes entrar';
}

$years = '17';

$velocidad = '28';

$estatura = '174';

if ($velocidad > 27 && $estatura > 170) {

    echo 'Puede ingresar al equipo <br/>';
    
}

    else {

        echo 'No puede ingresar al equipo <br/>';
}   if ($velocidad > 27 && $estatura > 170 &&$years>18){

    echo 'Vas a ligas mayores';
}

    else{

    echo 'Vas a ligas menores';

}   echo'<br/>';



    $aire = 'amarillo';

    switch($aire){

        case 'verde';
            echo 'La calidad del aire es buena';
        break;

        case 'amarillo';
            echo 'La calidad del aire es moderada';
        break;    
        
        case 'naranja';
            echo 'La calidad del aire no es saludable para grupos sensibles';
        break;

        case 'rojo';
            echo 'La calidad del aire no es saludable';
        break;

        case 'purpura';
            echo 'La calidad del aire es muy poco saludable';
        break;

        case 'marron';
            echo 'La calidad del aire es peligrosa';
        break;
    
        default:
            echo 'El color no es valido';
        break;
    
    
    }

?>