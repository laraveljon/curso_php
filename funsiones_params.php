<?php 

   function nombre($nombre){

   	echo "A quien saludas ? a ".$nombre."</br>";

   }

nombre("Jon");
nombre("Ana");
nombre("Julieta");
nombre("Marcos");


echo "<br><br><h1>Suma funsones</h1>";
function suma($dat1,$dat2){
	$res = $dat1+$dat2;
	echo "El resultado es ".$res."</br>";
}

suma(23,4);
suma(43,6);
suma(81,7);
suma(73,67);


 ?>
