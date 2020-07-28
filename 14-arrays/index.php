<?php
/*
 ARRAYS
 Un array es una coleccion o un conjunto de datos/valores,bajo un unico nombre
Para acceder a esos valores podemos usar un indice numerico o alfa numerico.
 */
$pelicula="batman";
$peliculas= array('batman','spiderman','castelbanias');
$cantantes=['porta','shota','nach'];

//Array asociativo
$persosnas =array(
    'nombre'=> 'Mario',
    'apellidos' => 'Salamanca',
    'web'=>'Mariosalamanca.com'
); 

echo $persosnas['apellidos'];
/*var_dump($peliculas[1]);
var_dump($cantantes);
echo $peliculas[0]."<br/>";
echo $cantantes[2];*/

//recorrer con fot 
echo "<h1>Listado de peliculas</h1>";

for($i=0;$i< count($peliculas);$i++){
echo "<ul>";  
        echo "<li>".$peliculas[$i]."</li>";
        echo "</ul>"; 
}
//recorrer con foreach
echo "<h1>Listado de cantante</h1>";

echo "<ul>"; 
foreach ($cantantes as $cantante){
    echo "<li>".$cantante."</li>";
   
}
 echo "</ul>"; 
 
 //arrays multidimencional
 
$contacto = array(
    array(
        'nombre'=>'Mario',
        'email'=>'mario@mario.com'      
    ),
    array(
        'nombre'=>'antonio',
        'email'=>'antonio@antonio.com'      
    ),
    array(
        'nombre'=>'luis',
        'email'=>'luis@luis.com'      
    ),
 );
 echo $contacto[1]['email'];
 
?>

