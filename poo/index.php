<?php

include 'carro/Marca.php';
use Carro\marca;


//Herencia de clases.

$carro = new marca('Pato','encendido', 'renault');
$carro2 = new marca('Mirla', 'chocado', 'mazda');
$carro3 = new marca('Rafa', 'Dindo', 'Princesa');
//Sin constructores
//$carro->setDueño('Pato<br>');
//$carro2->setDueño('Mirla');

echo $carro->getDueño() . '<br>';
echo $carro->getTipo() . '-' . $carro->getEstado() . '<br>';
echo $carro2->getDueño() . '<br>';
echo $carro2->getTipo() . '-' . $carro2->getEstado() . '<br>';
echo $carro2->mover() . '<br>';
echo $carro3->getDueño() . '<br>';
echo $carro3->getTipo() . '-' . $carro3->getEstado() . '<br>';

echo '<br> La cantidad de carros es: ' . marca::getCantidad() . '<br>';