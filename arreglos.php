<?php

$meses = array('Enero','Fefrero','Mazo','Abril','Mayo','Junio','Agosto','Septiembre','Octubre','noviembre','diciembre');
$meses2 = array('Enero','Fefrero','Mazo','Abril','Mayo','Junio','Agosto','Septiembre','Octubre','noviembre','diciembre');

$numeros = array(1,23,5,8,36,7,4,25,78,288);
$numeros2 = array(1,23,5,8,36,7,4,25,78,288);

// Ordena albabeticamente

sort($meses);
sort($numeros);
// retroceder alfabrticamente
rsort($meses2);
rsort($numeros2);

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

         foreach($meses2 as $mes)
	{

		echo "<li>".$mes."</li>";
	 }
?>
<br>
<h1>Numeros</h1>
<?php

	 foreach($numeros as $num){
	    echo "<li>".$num."</li>";
	 }

?>
<br>
<h1>Numeros</h1>
<?php

	 foreach($numeros2 as $num){
	    echo "<li>".$num."</li>";
	 }

?>

    </center>



  </body>
</html>
