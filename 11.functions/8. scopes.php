<?php

$identity = "Clark Kent";

function identityReveal()
{
   global $identity; //global lets you to use the variable inside the function which has been declared outside the funcions, Again NOT HIGHLY RECOMMENDED, USE ONLY WHEN NEEDED OR ELSE USE FUNCTIONS ARGUMENTS.
   return "$identity is a Super Man.\n";
}

echo identityReveal();

function visitorCount()
{
   static $visitorCount = 0; // static preserve the value of the functions
   $visitorCount++;
   echo "Visitor #$visitorCount has arrived.\n";
}

visitorCount();
visitorCount();
visitorCount();
