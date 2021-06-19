<?php

//return value

// kita juga bisa menambahkan type declaration gunakan untuk mengetahui kita mengembalikan value apa 
function sum(int $first, int $second) :int
{
  $total = $first + $second;
  return $total;
}

$result = sum(10,30);
var_dump($result);

$result = sum(13,320);
var_dump($result);



function getFinalValue(int $value) :string
{
  if ($value >= 80) {
    return "A";
  }else if ($value >= 70) {
    return "B";
  }else if ($value >= 60) {
    return "C";
  }else if ($value >= 50) {
    return "D";
  }else{
    return "E";
  }
}

$score = getFinalValue(40);
var_dump($score);