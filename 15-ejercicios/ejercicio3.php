<?php

/* 
ejerccion tres programa que compruebe que una variable esta vacia y si no rellenarla
 * con texto en minusculas y mostrarlo en mayusculas y negritas
 */
$texto="";

if(empty($texto)){
    $texto="Hola soy el relleno de la variable texto";
    $textomayus= strtoupper($texto);
    echo "<strong>$textomayus</strong>";
}else{
    echo"esta variable tiene contenido y es =".$texto;
}

