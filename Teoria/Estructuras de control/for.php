<?php

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
$count = count($cars);


for ($i = 0; $i < $count; $i++) {
  echo  "<li>" . $cars[$i] . "</li>";
}

?>
