<?php
// They are used for optimization but not recommended, preety dangerous as you may modify any values.

// NOT RECOMMENDED TO USE REFERENCES


$person = "John";
$client = &$person;

var_dump($person, $client);
var_dump($client);
var_dump($person, $client);

$person = "Harry";

var_dump($person, $client);
