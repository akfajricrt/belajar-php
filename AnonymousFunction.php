<?php


// di bawah ini adalah Anonymous function
$sayHello = function(string $name){
    echo "hello $name" . PHP_EOL;
};


$sayHello("Fajri");


function sayGoodBye(string $name, $filter){
  $finalName = $filter($name);
  echo "good By $finalName" . PHP_EOL;

}

sayGoodBye("Fajri", function(string $name) :string{
  return strtoupper($name);

});

//atau bisa juga menggunakan variable function

$filterFunction = function(string $name) :string{
  return strtoupper($name);

};

sayGoodBye("Fajri", $filterFunction);


// mengakses variable di luar closure menggunakan use($variable yang akan di panggil)

$firstName = "Ahmad";
$lastName = "khoirul";

$helloAhmad = function() use($firstName, $lastName) {
  echo "Hallo $firstName $lastName" . PHP_EOL;

};
$helloAhmad();

