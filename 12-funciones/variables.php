<?php
/*
//variables locales :son las que se definen dentro de una funcion 
 y no pueden se usadas fuera de la funcion solo estan disponibles dentro .
 anoser que haga un return.
 * 
//variables globales:son las que se declaran fueran de una funcion y estan 
 disponibles dentro y fuera de lasfunciones. 
 */
//variable global
$frace="Ni los genios son tangenios,Ni los medicres tan mediocres";

echo"$frace";
 
function holamundo(){
    global $frace;
    echo "<h1>$frace</h1>";
   
    $year=2019;
    echo "<h1>$year</h1>";
    
    
    return $year;
}
holamundo();
echo holamundo();


//funciones variables
function buenasdias(){
    return "<h1>Hola buenos dias</h1>";
}
function buenastardes(){
    return "<h1>Hola!! Que tal la comida</h1>";
}
function buenasnoches(){
    return"<h1>Te vaz adormir buenas noches</h1>";
}

$horario=$_GET["horario"];
$mivariable="buenas".$horario;
echo $mivariable();
?>
