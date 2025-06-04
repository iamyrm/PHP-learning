<?php

declare(strict_types=1); // Check the types strictly
function add(int $a, int $b): int
{
   return $a + $b;
}
var_dump(add(1, 2));
// var_dump(add((int)1.0, 2));
// var_dump(add(1.0, 2));
// var_dump(add("1", 2)); 
