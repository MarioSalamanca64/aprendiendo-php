<?php

/* 
ejercicio5 hacer un programa que muestre todos los numeros entre dos 
 * numeros 
 */
if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
$numero1 = $_GET['numero1'] ;
$numero2 = $_GET['numero2'] ;
if($numero1< $numero2){
for($i= $numero1; $i <= $numero2; $i++){
    echo"<h4>$i</h4>";
}}else{
    echo "El numero1 debe de ser menor al numero2";
}
    
} else {
echo"<h1>no estas poniendo tus numeros en la url</h1>";    
}


?>


