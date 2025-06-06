<?php

class Person
{
   public string $name;
   public int $age;

   public function __construct(string $name, int $age)
   {
      $this->name = $name;
      $this->age = $age;
   }

   public function introduction(): string
   {
      return "Hi, My name is {$this->name} and I'm {$this->age} years old.\n";
   }
}

$person = new Person("Yagya", 25);
echo $person->introduction();
$person2 = new Person("Elbish", 6);
echo $person2->introduction();


// The above codes also can be written as 

class People
{
   public function __construct(public string $name, public int $age) {}

   public function intro(): String
   {
      return "Hi, My name is {$this->name} and I'm {$this->age} years old.\n";
   }
}

$people = new People("Yagyaraj", 25);
echo $people->intro();
