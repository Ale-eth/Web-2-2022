<?php

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
$count = count($cars);


for ($i = 0; $i < $count; $i++) {
  echo  "<li>" . $cars[$i] . "</li>";
}



$i = 0; 
while ($i < $count) { 
  echo "<li>" . $cars[$i] . "</li>"; 
  $i++; 
} 



foreach ($cars as $car) { 
  echo "<li>".$car.</li>";      
}


?>
