<?php
/*bucle while
estructura de control que itera o repite la ejecucion de una serie de 
instrucciones tantas veces como sea nesesario en base auna condicion 
 while(condicion){
 bloque de instrucciones 
 * }
*/
$numero=0;
while ($numero <= 100){
    echo $numero;
if ($numero != 100){
        echo", ";
    }
    $numero++;
}
echo '<hr/>';
//ejemplo
if(isset($_GET['numero'])){
    //cambiar tipo de dato 
    $numero =(int)$_GET['numero'];            
}else{
    echo $numero = 1;
}
echo "<h1>Tabla de multiplicar del numero $numero</h1>";
$contador=1;
while($contador <= 10){
    echo "$numero x $contador =".($numero*$contador)."</br>";
    $contador++;
}


echo"<br/>";
//do while 
/*do{
   //bloke de instrucciones 
}while(condicion);
*/
 
$edad = 18;
$contador= 1;
do{
echo "Tienes acceso al local privado $contador <br/>";
$contador++;
}while($edad >= 18 && $contador <=10)

?>

