<?php

/* 
 ejercicio 4 crear un scrip en php que tenga 4 variables, una de tipo array 
 * otra de tipo string, otra int otra booleana y una  imprima  un mensaje 
 * segun el tipo que sea. 
 */


$matris= array("hola mundo",88);
$texto= "Master en php";
$numero=88;
$verdadero=true;

if(is_array($matris)){
    echo"<h1>El array es un array</h1>";
}
if (is_string($texto)){
    echo "<h1>$texto</h1>";
}
if (is_integer($numero)){
    echo "<h1>$numero</h1>";
}

if(is_bool($verdadero)){
    echo "<h1>El booleano es verdadero</h1>";
}

