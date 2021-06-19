<?php

// kita juga bisa menggunakan default argument value 
// value pertama isinya wajib, jika setelah nya maka bebas bisa diberi string kosong

function sayHello($firstName, $lastName = "")
{
  echo "Hello $firstName $lastName" . PHP_EOL;

}
sayHello("ahmad");
sayHello("khoirul","Fajri");


// type declaration

function sum(int $first, int $last){
  $total = $first + $last;
  echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100,100);
sum("100","100");
sum(true,false);

//argument list bisa menambahkan lebih banyak value
function sumAll(...$values)
{
  $total = 0;
  foreach ($values as $value ) {
    $total += $value;
  }

  echo "Total" . implode(",",$values) . " = $total" . PHP_EOL;
}

$values = [1,2,3,4,5];

sumAll(1,2,3,4,5);
sumAll(...$values);