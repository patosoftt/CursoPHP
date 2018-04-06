<?php

//ejemplo de que se puede dejar automatico la asignacion de llaves en arrays
// o se puede asignar llave en texto o numerica a gusto.
$arrayVar = [
    'color1' =>'rojo',
    'color2' =>'azul',
    3 => 'negro'];

var_dump($arrayVar);
// se puede acceder con la llave en corchetes.
var_dump($arrayVar['color2']);

?>