<?php
/*
while(expressions){
  Block of statements and Codes
}
*/

$secret = 'secret';
$attempts = 0;
$maxAttempts = 3;

while ($attempts < $maxAttempts) {
  echo "\nWelcome to the Guessing Game.\nPlease guess the secret.\n";
  // Taking the input from the terminal
  $guess = trim(fgets(STDIN));
  $attempts++;

  // Checking if the guess is correct or not.
  if ($guess == $secret) {
    echo "\nCongratulatins!, You have guessed the secrete correctly.🎊";
    break;
  } elseif ($attempts == $maxAttempts) {
    echo "\nSorry!, You have lost all your chances.🥹\n";
  } else {
    echo "\nSorry!, Your guess doesn't matched. You have " . ($maxAttempts - $attempts) . " attempts left.🤗";
  }
}
