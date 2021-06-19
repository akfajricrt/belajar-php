<?php

$firstName = "ahmad ";
$lastName = "fajri";

$anonymousFunction = function() use($firstName, $lastName) : string{
  return "Hello $firstName $lastName" . PHP_EOL;

};


// menggunakan arrow function di gunakan pada function yang serderhana
//dan arrow function ada pada php versi 7.4 saja
// menggunakan arrow function kita bisa memanggil variable di luar function tanpa 
// menambahkan function use()
$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();