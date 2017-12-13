<?php 

$meses  = array('Enero'  ,'Febrero','marzo','mayo',
	            'junio','julio','agosto','septembre',
	            'octubre','noviembre','diciembre' );

// array asocuativo
// 
$autos = array('Ford' => 'mustang' , 'Ford'=> 'maverick', 'Doge'=>'Challenger','Chevrolet'=>'Chelvy');


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
    <ul>
       <?php 
       foreach ($meses as $mes) {
			echo "<li>".$mes."</li>";
			//var_dump($meses);
		}

        ?>
    </ul>
    <br><br>
    <li>
    <?php 

     foreach ($autos as $dato => $valor) {
     	# code...
       echo "<li>".$dato." : ".$valor."</li>";
     }


     ?>
    </li>
 </body>
 </html>