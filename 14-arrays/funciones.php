<?php

$cantantes=['porta','shota','nach','alfredo'];
$numeros=[1,8,5,3,6];
//ordenar
asort($cantantes);
asort($numeros);
var_dump($numeros);


//a;adir elementos de a una array
$cantantes[]="Natos";
$cantantes[]="Natos";
$cantantes[]="Natos";
array_push($cantantes,"whuo");
//Quitar arrays Eliminar
array_pop($cantantes);
unset($cantantes[2]);

//Aleatorio
$indice=array_rand($cantantes);
echo $cantantes[$indice];
var_dump($cantantes);

//Dar la vuelta
var_dump(array_reverse($numeros));

//Buscar dentro de un array

$resultado=array_search("porta",$cantantes);
var_dump($resultado);
 
//Contar numeros de elemenctos

echo count($cantantes);





