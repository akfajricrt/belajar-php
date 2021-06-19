<?php

function sayHello(string $name, callable $filter){
  $finalName =call_user_func($filter,$name);
  echo "Hello $finalName " . PHP_EOL;

}

sayHello("Fajri", "strtoupper");
sayHello("Fajri", "strtolower");

sayHello("Fajri", function(string $name) :string {
  return strtoupper($name);
});

sayHello("Fajri", fn($name) => strtoupper($name));