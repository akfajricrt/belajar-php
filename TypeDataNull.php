<?php

$name = "Fajri";
$name = null; //null untuk menghapus value tanpa menghapus variable


$age = null;

echo "Nama : ";
echo $name;
echo "\n";

echo "Usia : ";
echo $age;
echo "\n";

echo is_null($name); 
echo "\n";

$contoh = "tes";
unset($contoh); //di gunakan untuk menghapus variabel
echo $contoh;

$contoh = "Fajry";
var_dump(isset($contoh));