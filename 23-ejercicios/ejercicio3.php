<?php
 $resultado= FALSE;
if (isset($_POST['n1']) && isset($_POST['n2'])){
   
    
    if(isset($_POST['sumar'])){
        $resultado = "El resultado es:".($_POST['n1'] + $_POST['n2']);
    }
    if(isset($_POST['restar'])){
        $resultado = "El resultado es:".($_POST['n1'] - $_POST['n2']);
    }
    if(isset($_POST['multiplicar'])){
        $resultado = "El resultado es:".($_POST['n1'] * $_POST['n2']);
    }
    if(isset($_POST['dividir'])){
        $resultado = "El resultado es:".($_POST['n1'] / $_POST['n2']);
    }
}
?>

<!DOCTYPE>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Calculadora php</title>
    </head>
    <body>
        <h1>Calculadora php</h1>
        <form action="" method="POST">
            <label for="n1">Numero 1</label> <br/>
            <input type="number" name="n1"/> <br/><br/>
            <label for="n2">Numero 2</label><br/>
            <input type="number" name="n2"><br/><br/>
            <input type="submit" value="sumar" name="sumar"/>
            <input type="submit" value="restar" name="restar"/>
            <input type="submit" value="multiplicar" name="multiplicar"/>
            <input type="submit" value="dividir" name="dividir"/>
            
        </form>
        
       <?php
       if ($resultado != false):
           echo "<h2>$resultado</h2>";
       endif;
       
       ?>
    </body>
    
    
</html>
