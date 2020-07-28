<?php
/*
 Cookie: Es un fichero que se almacena en el ordenador del usuario  que visita 
 la la web con el fin de recordar datos o rastrear el comprtamiento del mismo 
 en la web. 
 */

//crear cookies
//setcookie("nombre","valor que solo peude ser texto",caducidad,ruta,dominio);

//cookie basica
setcookie("micookie","valor de mi galleta");

//cookie con expiracion
setcookie("unyear","valor de cookie con valor de 365 dias", time()+(60*60*24*365));

header('Location:ver_lascookies.php');

?>


