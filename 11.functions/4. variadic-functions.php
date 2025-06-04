<?php

// defined using three dots before the argument
// can take unlimited number of arguments,
// Required arguments will be passed as an array to the function.

declare(strict_types=1);
function sum(int ...$numbers): int
{
   $sum = 0;
   var_dump($numbers);
   foreach ($numbers as $number) {
      $sum += $number;
   }
   return $sum;
}

// var_dump(sum());
var_dump(sum(10));
$num = [1, 2, 3, 4, 5];
var_dump(sum(...$num));

// impolde converts array to string.
function introduceTeam(string $teamName, string ...$members): void
{
   echo "Team: $teamName\n";
   echo "Members:" . implode(', ', $members) . "\n";
}

$teams = introduceTeam("Team A", "Yagya", "Elbish", "John");

echo $teams;
