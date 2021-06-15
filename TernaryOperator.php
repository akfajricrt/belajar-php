<?php

$gender = "PRIA";
$hi = null;

if ($gender == "PRIA") {
  $hi = "Hai Bro!" . PHP_EOL;
}else{
  $hi = "Hai Nona!" . PHP_EOL;
}

echo $hi;


//Ternary Operator
$sapaan = ($gender == "PRIA") ? "Hai Bro!" : "hai Nona";
echo $sapaan . PHP_EOL;