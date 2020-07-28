<?php

/* 
Ejercicio 2.
 1. una funcion
 2. validar un email con filter_var
 3. recojer variable por get y validar 
 4. mostrar resultado
 */

function validarEmail($email){
    $status="No valido.";
    if (!empty($email)&& filter_var($email,FILTER_VALIDATE_EMAIL)){
            $status="valido";
    }
    return $status;
}

if(isset($_GET['email'])){
    echo validarEmail($_GET["email"]);
} else {
    echo"pasa por get un email";
}