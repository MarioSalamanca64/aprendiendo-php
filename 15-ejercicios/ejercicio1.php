<?php

/*
 * Ejercicio 1 hacer una programa en php que tenga un array con 8 numeros 
 * enteros y que haga lo sigiente :
 * -recorrer y mostralo 
 * -ordenar y muestrarlo
 * -mostrar su longitud 
 * -buscar algun elemento  
 */
//funcion 
function mostrararray($numeros){
    $resultado="";
    foreach ($numeros as $numeros){
        //resultado=resultado.nuemoros
    $resultado.=$numeros."<br/>";
}
return $resultado;
}

//crear el array
$numeros=[1,5,3,4,2,6,7,8];
// Recorrer y mostar
echo "<h1>Recoorer y mostrar</h1>";
echo mostrararray($numeros);


//ordenar y mostrar 
echo "<h1>Ordenar y mostrar</h1>";
sort($numeros);

echo mostrararray($numeros);

//mostrar logitud 
echo "<h1>Mostrar longitud</h1>";
echo count($numeros);

//busqueda en el array
if(isset($_GET['numero'])){
 
$busqueda=$_GET['numero'];
echo "<h1>Busqueda de un array</h1>";

$search=array_search($busqueda, $numeros);
var_dump($search);
if (!empty($search)){
    echo"<h4>El numero busacado en el array si existe y es = $search</h4>";
}else{
    echo"<h4>El numero no existe en el array</h4>";
}  
}









