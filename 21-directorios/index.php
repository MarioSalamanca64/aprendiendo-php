<?php
//Crear carpeta
if(!is_dir('mi_carpeta')){
mkdir('mi_carpeta',0777)or die('No se puede mostrar la carpeta');
} else {
echo "Ya existe esta carpeta"  ;  
}
//Eliminar carpeta
//rmdir('mi_carpeta');

//Ver archivos dentro de la carpeta
echo"<hr/><h1>Contenido de la carpeta</h1>";
if ($gestor= opendir('./mi_carpeta')){
    while(false !== ($archivo= readdir($gestor))){
        if($archivo != '.'&& $archivo != '..')
        echo "$archivo"."<br/>";
    }
}
?>

