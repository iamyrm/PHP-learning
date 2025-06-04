<?php

$numbers = [1, 2, 3, 4, 5];

$squared = array_map(function ($n) {
   return $n * $n;
}, $numbers);

var_dump($numbers, $squared);


// Arrow Functions
$squared2 = array_map(
   fn($n) => $n * $n,
   $numbers
);

var_dump($numbers, $squared, $squared2);
