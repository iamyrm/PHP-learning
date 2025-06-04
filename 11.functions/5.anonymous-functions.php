<?php

// It can be assigned in the variables or pass as an arguments,

// They are also called closure

$greet = function ($name) {
   return "Hello, $name";
};
echo $greet("Yagya");


$numbers = [1, 2, 3];
$sqare = array_map(function ($n) {
   return $n * $n;
}, $numbers);

var_dump($numbers,$sqare);