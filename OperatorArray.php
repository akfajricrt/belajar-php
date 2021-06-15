<?php

$first = [
  "first_name" => "Ahmad"
];

$last = [
  "first_name" => "Budi",
  "last_name" => "khoirul",
  
];


$full = $first + $last;
var_dump($full);


$a = [
  "first_name" => "Ahmad",
  "last_name" => "khoirul"
];

$b = [
  "last_name" => "khoirul",
  "first_name" => "Ahmad"
];

var_dump($a == $b);
var_dump($a === $b);