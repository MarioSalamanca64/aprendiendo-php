<?php

/* 
Funciones:
 una funcion es un conjunto de instruciones agrupadas bajo un nombre concreto y 
 pueden reutilizarse solamente invocando  la funcion tanta veces como queramos 
function nombredemifuncion($miparametro){
  //bloque /conjunto de instrucciones
 } 
 nombredemifuncion($miparametro);
 nombredemifuncion($miparametro);
 
 */

//ejemplo1

/*function muestranombres(){
    echo "Mario Salamanca <br/>";    
    echo "Juan Salamanca <br/>"; 
    echo "Pedro Salamanca <br/>"; 
    echo "Arturo Salamanca <br/>"; 
    echo"<hr/>";
}

//Inbocar funcion
muestranombres();
muestranombres();
*/
//ejemplo2

function tabla($numero){
    echo"<h3>Tabla de multiplicar del numero:$numero</h3>";
    for($i=1;$i<=10;$i++){
        $operacion= $numero*$i;
        echo "$numero x $i = $operacion <br/>"  ;  
    }
}
/*

echo var_dump($_GET);

if(isset($_GET['$numero'])){
    tabla($_GET['$numero']);
} else {
    echo 'No haz puesto numero en la url';  
}
*/
/*
for($i=0;$i<=10;$i++){
    tabla($i);
}*/
//ejemplo3
/*
function calculadora($numero1,$numero2,$negrita=false){
   //conjunto de istruciones a ejecutar
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplicacion=$numero1*$numero2;
    $divicion=$numero1/$numero2;
  
    if($negrita){
        echo"<h1>";
    }
    echo "suma: $suma <br/>";
    echo "resta: $resta <br/>";
    echo "multiplicacion: $multiplicacion <br/>";
    echo "divicion: $divicion <br/>";
    if($negrita){
        echo"</h1>";
    }
    echo"<hr/>";
    
    
}
calculadora(50,30);

function devuelveelnombre($nombre){
    return"El nombre es:$nombre";
}

echo devuelveelnombre("Victor robles");

*/
//modificacion correcta
function calculadora($numero1,$numero2,$negrita=false){
   //conjunto de istruciones a ejecutar
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplicacion=$numero1*$numero2;
    $divicion=$numero1/$numero2;
  
    $cadena_texto="";
    
    if($negrita){
        $cadena_texto.="<h1>";
    }
    $cadena_texto.= "suma: $suma <br/>";
    $cadena_texto.= "resta: $resta <br/>";
    $cadena_texto.= "multiplicacion: $multiplicacion <br/>";
    $cadena_texto.= "divicion: $divicion <br/>";
    if($negrita){
        $cadena_texto.="</h1>";
    }
    $cadena_texto.="<hr/>";
    
    return $cadena_texto;
}
echo calculadora(50,30,true);

//ejemplo4

function getnombre($nombre){
    $texto="El nombre es:$nombre";
    return $texto;
}

function getapellido($apellido){
    $texto="El apellido es:$apellido";
    return $texto;
}


function devuelveelnombre($nombre,$apellidos){
    $texto= "El nombre es:$nombre"
        . "<br/>".
            "El apellido es:$apellidos";
    return $texto;
}

echo devuelveelnombre("Victor","Robles");
//echo getapellido("samanta");


?>