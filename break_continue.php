<?php 

   $paises = array('Chiguahua' => 'mexico',
   	               'sevilla'=>'España',
   	               'Sicilia'=>'Italia',
   	               'Toronto'=>'USA',
   	               'Liverpool'=>'Inglaterra',
   	               'Münich'=>'Alemania');


   foreach ($paises as $dato => $value) {
   	
   	echo "<center>"."<li>".$dato." : ".$value."</li>"."<center>";
   }

echo "<br><br> BREAK";
   foreach ($paises as $dato => $value) {
   	
   	
   	//Breack
   	if($dato="Toronto" && $value == 'USA'){
   		break;
   	}
   	echo "<center>"."<li>".$dato." : ".$value."</li>"."<center>";
   }
   echo "<br><br> CONTINUE";

 foreach ($paises as $dato => $value) {
   	
   
   	//Breack
   	if($dato="Toronto" && $value == 'USA'){
   		continue;
   	}
   		echo "<center>"."<li>".$dato." : ".$value."</li>"."<center>";
   }
 ?>