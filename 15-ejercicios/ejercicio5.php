<?php

/* 
crear un array con el contenido de la sigiente tabla:
 accion   aventura  deportes
 gta      assains   fifa 2020
 cod      crash     pes 2020 
 pugb     pince     moto gp 2020
 cada columna debe de ir en un fichero diferente (included).
 */

$tablas= array(
    "accion" => array("gta","cod","pugb"),
    "aventura" => array("assains","crash","prince"),
    "deportes" => array("fifa 2020","pes 2020","moto gp 2020"),
);
$categorias= array_keys($tablas);
//var_dump(array_keys($tablas));
?>
<table border="1">
    <?php require_once 'ejercicio5/encabesados.php';?>
    <?php require_once 'ejercicio5/primerafila.php'; ?>
    <?php require_once 'ejercicio5/segundafila.php';?>
    <?php require_once 'ejercicio5/tercerafila.php';?>
    
</table>