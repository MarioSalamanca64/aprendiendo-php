<?php
/*
 para mostras el valor de las cookies, tengo que usar $_COOKIES, 
es una variable superglobal es un array asociativo.
 */

if(isset($_COOKIE['micookie'])){
    echo"<h1>".$_COOKIE['micookie']."</h1>"."<br/>";
}else{
    echo"<h1>no existe esta galleta</h1>";
}

if(isset($_COOKIE['unyear'])){
    echo"<h1>".$_COOKIE['unyear']."</h1>";
} else{
echo"<h1>no existe esa esta galleta</h1>";    
}
?>

<a href="crearcookies.php">Crear mis galletas<br/></a>
<a href="borrar_cookies.php">Borrar mis galletas</a>
