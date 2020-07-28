<?php

/* 
Escribir un prigramad de php que añada valores a un array miestras que su 
 * longitud sea mayor a 120 y mostrarlo 
 * 
 */
$coleccion= array ();

for($i=0;$i< 120;$i++){
    array_push($coleccion,"elemento-".$i);
}

//  var_dump($coleccion);

echo $coleccion[45];

