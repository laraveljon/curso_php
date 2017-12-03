<?php

$cantidad = $_POST['cantidad'];

if($cantidad == 0){
  echo "Vacio";
}else{
  for ($i=1; $i <= $cantidad ; $i++) {
    echo "<input type='text' value = '".$i."'><br>";
  }
}
 ?>
