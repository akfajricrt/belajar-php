<?php

$value = array(2,3,4,5,6.7);

var_dump($value);

$names = ["Ahmad ", "Khoirul","Fajri"];
var_dump($names);

// untuk menambahkan value menggunakan $array[] = value

$names[] = "joko";
var_dump($names);


// untuk mengakses data array menggunakan $array[index]
$names[3];
var_dump($names);


// untuk mengubah data array menggunakan $array[index] = value
$names[2] = "Fajri";
var_dump($names);


// untuk menghapus data array menggunakan unset($array[index])

unset($names[1]);
var_dump($names);


// untuk mengetahui total data array menggunakan count($array)
var_dump(count($names));


//Array Map

$fajri = [
  "id" => "Fajri",
  "name" => "Ahmad Khoirul Fajri",
  "age" => 24,
  "address" => [
    "city" => "Yogyakarta",
    "country" => "Indonesia"
  ]
];

var_dump($fajri);

var_dump($fajri["name"]);
var_dump($fajri["address"]["country"]);
