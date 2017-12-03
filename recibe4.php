<?php

  $fila = $_POST['fila'];
  $columna = $_POST['columna'];

$a[$fila][$columna]=" ";


print ("<TABLE BORDER=2>");
    for ($i=1; $i <=$fila ; $i++) {
      print("<tr>");
      for ($j = 1; $j <= $columna; $j++) {
        @print("<td> "."<input type='text' value='".$a[$i][$j]."'>"."</td>");
       }

    }

    #ponemos la etiqueta de cierre de la tabla

print("</table>");

 ?>
