<?php

$name = "ahmad khoirul fajri";

echo "Nama : ". $name . PHP_EOL;
echo "Value : ". 100 . PHP_EOL;


$valueString = (string)100; // mengubah dari integer ke string
var_dump($valueString);

$valueInteger = (int)"100"; // mengubah dari string  ke integer
var_dump($valueInteger);

$valueFloat = (float)"100.11"; // mengubah dari string  ke float
var_dump($valueFloat);


$name = "fajri";

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;


echo "Nama "  . $name . ", Selamat Belajar PHP" . PHP_EOL;
echo "Nama $name, Selamat Belajar PHP" . PHP_EOL; //Varible Pharsing


//curly Brase di gunakan untuk menggabung variable pharsing dengan string tanpa spasi
$var = "var";
echo "This is {$var}s" . PHP_EOL;


