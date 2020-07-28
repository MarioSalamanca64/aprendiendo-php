<?php

/* 
 Sesion: Almacenar y persistir datos del usuario mientras que navega
 en un sitio web asta que cierrra sesion o cierra navegador.
 */

//iniciar sesion 
session_start();
//variable local 
$variable_normal="soy una cadena de texto";
//variable de sesion 
$_SESSION['variable_persistente'] = "hola soy una sesion activa";

echo "$variable_normal"."<br/>";
echo $_SESSION['variable_persistente']
?>
