<?php

$meses = array('Enero','Fefrero','Mazo','Abril','Mayo','Junio','Agosto','Septiembre','Octubre','noviembre','diciembre');



 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <center>

        <h1>Meses del año</h1>

        <?php

           foreach ($meses as $mes) {

             echo "<li>".$mes."</li>";
           }

        ?>


    </center>
  </body>
</html>
