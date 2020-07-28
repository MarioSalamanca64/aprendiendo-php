<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Subir archivos PHP</title>
    </head> 
    <body>
        <h1>Subir imagenes con php</h1>
        <form action="subir.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo"/> 
            <input type="submit" value="Enviar"/>
            
        </form>
        <h1>Listado de archivos</h1>
        <?php
        $gestor= opendir('./images');
        if($gestor):
            while(($image= readdir($gestor))!== FALSE):
                if ($image != '.'&& $image!='..'):
                    echo"<img src='images/$image' width='200px'/><br/>";
                endif;
            endwhile;
                    
        endif;
        ?>
        
    </body>
    
    
</html>
