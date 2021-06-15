<?php

$counter= 1; 
while (true) { 
  echo "Perulangan While Ke - $counter" . PHP_EOL;
  $counter++;
  if ($counter > 10) {
    break;
  }

}