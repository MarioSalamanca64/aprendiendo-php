<?php

//debuggear
$nombre="Mario Viloria";
var_dump($nombre);

//fechas
echo date('d-m-y')."<br/>";
echo time()."<br/>";

//matematicas
echo"raiz cuadrada de 10 es ". sqrt(10)."</br>";

echo "Numero Aleatorio entre 10 y 40 :". rand(10,40)."<br/>";


echo "Numero pi ". pi()."<br/>";


echo "Redondear ". round(7.85464)."<br/>";

//Mas funciones generales
echo gettype($nombre)."<br/>";

//detectar tipado

if (is_string($nombre)){
    echo "Este es una variable string"."<br/>";
}

if (!is_float($nombre)){
    echo "Es te no es una variable con decimal";
}
//comprabar si existe una variable
echo "<br/>";
if(isset($edad)){
    echo"La variable existe";
}else{
    echo"La variable no existe";
}

//limpiar espacios 
echo "<br/>";
$frase= "    mi contenido     ";
var_dump(trim($frase));

//Eliminar variables / indices ray
 $year=NULL;
 unset($year);
 
 
 //Comprobar Variables vacia
 $texto=TRUE;
 if (empty($texto)) {
    echo"La variable texto no tiene contenido";
} else {
  echo "La variable texto TIENE CONTENIDO";  
}
echo "<br/>";


//Contar cadenas de un string
$cadena="45";
echo strlen($cadena);
 echo "<br/>";
 
 //Encontrar caracter
 $frace="La vida es bella";
 
 echo strpos($frace,"vida");
 echo "<br/>";
 
 
 //Remplasar palabras de un string 
 $frace = str_replace("vida","moto" , $frace);
 echo $frace;
  echo "<br/>";
  
 //MAYUSCULAS Y minusculas
 echo strtolower($frace);
  echo "<br/>";
 echo strtoupper($frace);
 
?>