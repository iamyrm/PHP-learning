<?php

function greet($name)
{
   return "Hello, $name.\n";
}

echo greet("Yagya");


function greetWithTime($name, $time = "Day")
{
   return "Good $time, $name.\n";
}

echo greetWithTime("Yagya");
echo greetWithTime("Elbish", "Evening");
