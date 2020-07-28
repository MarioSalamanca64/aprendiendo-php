<?php
/*
 //Condicionales 
 * IF:
 * if(condicion){
 * instrucciones
 * }
 * else{
 * otras instrucciones 
 * }
 //OPERADORES DE COMPARACION 
 == IGUAL
 === IDENTICO 
 != DIFERENTE 
 <> DIFERENTE 
 !== NO IDENTICO 
 < MENOR QUE 
 > MAYOR QUE 
 <= MENOR O IGUAL QUE 
 >= MAYOR O IGUAL QUE 
 
 
 OPERADORES LOGICOS
 && = AND (Y DESPUES)
 || = OR (O ESTO O LO OTRO) alt 124
 ! = NOT (NO)
 and,or
 */

//ejemplo 1
 $color="rojo";
 
 if ($color == "rojo"){
     echo"El color es rojo";
 }
 else { echo "El color no es rojo";
     
}
echo '<br>';

//ejemplo 2

$year=2035;
if ($year >= 2019){
   echo 'Estamos en 2019 o en adalante';
}
else {
    echo'Estamos antes de 2019';
}
//ejemplo 3

$nombre= "David Porros";
$ciudad= "Distrito federal";
$continente="America";
$edad=19;
$mayoria_de_edad=18;

if ($edad >=$mayoria_de_edad) {
    echo"<h1>$nombre Es mayor de edad</h1>";
    if($continente == "America norte") {
     echo "<h2>y es del $ciudad</h2>";   
    }
    else{
        echo '<h2>no es del America norte</h2>';
    }
         
}
else{
echo"<h1>$nombre No es mayor de edad</h1>"; 
}

//ejemplo 4
echo'<hr>';

$dia = 1;
/*
if ($dia == 1){
    echo "Es lunes";
}else{
    if($dia==2){
        echo"Es martes";
    }else{
        if ($dia==3){
            echo "Es miercoles";
        } else{
            if ($dia==4){
                echo "Es jueves";
            } else {
                if($dia==5){
                    echo "Es viernes";                
                } else {
                  
                       echo"Es fin de semana";
                    
                }
                 
                
            }
        }
    }        
} 
*/
echo '<hr>';


//switch
$dia3 = 5;

switch ($dia3){
case 1:  
    echo 'Lunes';
    break;
case 2:
    echo 'martes';
    break;
case 3: 
    echo 'miercoles';
    break;
case 4: 
    echo'jueves';
    break;
case 4:
    echo'viernes';
    break;
case 5:
    echo'viernes';
    break;
default :
    echo 'Es fin de seamana';
}
echo'<br>';

 if($dia == 1){
     echo"Es lunes";
 }elseif ($dia == 2) {
    echo"Es martes";
} elseif ($dia == 3) {
    echo "Es miercoles";
} elseif ($dia == 4) {
    
echo "Es martes";
}elseif($dia == 5){
    echo "Es viernes";
} else {
    echo"Es fin de semana";
}
echo '<hr>';

//ejercicio 5

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 65;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "Esta en edad de trabajar";
}else{
    echo "No esta en edad de trabajar";
}
echo'<hr>';

$pais = "colombia";
if ($pais=="mexico" || $pais=="españa" || $pais == "colombia"){
    echo"En este pais se habla español";
}else{
    echo"En este pais no se habla español";
}
echo'</br>';
//goto
goto marca;
echo '<h3>Instrucciones 1</h;3>';
echo '<h3>Instrucciones 2</h;3>';
echo '<h3>Instrucciones 3</h;3>';
echo '<h3>Instrucciones 4</h;3>';
echo '<h3>Instrucciones 5</h;3>';

marca:
echo "Me he saltado 4 echos"
?>

