<?php
/*
 * el ciclo (loop) 'for' se ejecuta solo si se cumple la condición.
 */
//$var = 11;
//for ($i = $var; $i <= 10; $i++) {
//    echo $i . '<br>';
//}

/*
 * El ciclo (loop) 'while' se ejecuta mientras se cumpla la condición.
 */
//$var = 12;
//while($var <= 10) {
//    echo $var;
//    echo '<br>';
//    $var++;
//}

/*
 * El ciclo (loop) 'do  while' se ejecuta al menos una vez asi no se cumpla la condición.
 */
//$var = 8;
//do {
//    echo $var . '<br>';
//    $var++;
//} while($var <= 10);

/*
 * El ciclo foreach sirve para recorrer arreglos o datos.
 * El segundo nombre de variable($vars as $var) es el nombre que se da a los datos dentro del ciclo.
 * Para leer las llaves o asignaciones de los datos se puede agregar $key antes de la segunda variable($vars as $key => $var).
 */
$nombres = ['Pato', 'Mirla', 'Rafa'];
foreach ($nombres as $key => $nombre) {
    echo $key . '->' . $nombre . '<br>';
}