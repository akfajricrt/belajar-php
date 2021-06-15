<?php

$names = ["ahmad ", "khoirul","fajri"];
foreach ($names as $name ) {
  echo "data $name" . PHP_EOL;
}

//Map key value

$person = [
  "first_name" => "Ahmad",
  "middle_name" => " Khoirul",
  "last_name" => " Fajri"
];

foreach ($person as $key => $value) {
  echo "Data $key = $value" . PHP_EOL;
}