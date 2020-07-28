<?php

/* 

 */

echo"<table border='1'><tr>"; //inicio de la tabla 

echo "<tr>";//inicio fila 1 de fila
for($cabesera=1;$cabesera<=10;$cabesera++)
echo"<td>tabla de $cabesera</td>";
echo"</tr>";//cierre fila 1 de fila 

echo "<tr>";//inicio fila 2
for($i=1;$i<=10;$i++){
    echo "<td>";
    for($x=1;$x<=10;$x++){
        echo"$i x $x =".($i*$x)."<br/>";
    }
    
    
    
    echo"</td>";
}
echo"</tr>";//cierre fila dos

echo"</table>";

