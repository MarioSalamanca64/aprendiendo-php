<?php
/*
//abrir archivo
$archivo= fopen("fichero_texto.txt","a+");
//leer contenido

while (!feof($archivo)){
$contenido= fgets($archivo)."<br/>";
echo $contenido;
} 

//Escribir
fwrite($archivo,"soy un texto puesto desde PHP");
//cerrar archivo
fclose($archivo);
 * 
 */
//copiar
//copy('fichero_texto.txt','fichero_copiado.txt')or die("error al copiar");
//
//
//renombrar
//rename('fichero_copiado.txt','fichero_copiado_y_renombrado');

//Eliminar
//unlink('fichero_copiado.txt') or die('Error al borrar');

if(file_exists('fichero_texto.txt')){
    echo"El archivo existe";
} else {
    echo 'El archivo no existe';    
}


?>

