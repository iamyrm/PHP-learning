<?php

function greet(string $name, string $greeting = "Hello", bool $shout = false): string
{
   $message = "$greeting, $name!";
   return $shout ? strtoupper($message) : $message;
}

echo greet("Alice") . "\n";
echo greet("Alice", "Hi") . "\n";
echo greet("Alice", "Hey", true) . "\n";

// NAMED FUNCTIONS
echo greet(greeting: "Good Morning", shout: true, name: "Yagya");
