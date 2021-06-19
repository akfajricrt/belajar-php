<?php


function foo()
{
  echo "Foo" . PHP_EOL;
}
function bar()
{
  echo "Bar" . PHP_EOL;
}

$fooName = "foo";
$fooName();


function sayHello(string $name, $filter){
  $finalName = $filter($name);
  echo "hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string {
  return "Sample $name" . PHP_EOL;
}

sayHello("Fajri","sampleFunction");
sayHello("Fajri","strtoupper");
sayHello("Fajri","strtolower");


