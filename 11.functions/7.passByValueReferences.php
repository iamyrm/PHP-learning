<?php

// NOT RECOMMENDED TO USE REFERENCES VALUES AS IT MAY CHANGE THE VALUES

// NOT RECOMMENDED FOR CODE OPTIMIZATION UNLESS YOU KNOW WHAT YOU ARE DOING.

function doubleValue(int &$number): int
{
   $number *= 2;
   return $number;
}

$original = 5;

doubleValue($original);
var_dump($original);
