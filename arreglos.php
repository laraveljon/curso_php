<?php

$meses = array('Enero','Fefrero','Mazo','Abril','Mayo','Junio','Agosto','Septiembre','Octubre','noviembre','diciembre');

// Ordena albabeticamente

sort($meses);
// retroceder alfabrticamente
rsort($meses);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <center>

        <h1>Ordenado Alfabetico</h1>

        <?php

           foreach ($meses as $mes) {

             echo "<li>".$mes."</li>";
           }

        ?>


         <br>
        <h1>Oirdenado en retroceso alfabeticamente</h1>
         
<?php

         foreach($meses as $mes)
	{

		echo "<li>".$mes."</li>";
	 }
 ?>

    </center>
   
    
        
  </body>
</html>
