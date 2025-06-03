<?php

$status = 200;

$message = match ($status) {
  200, 300 => 'Success Stauts',
  400, 404, 500 => 'Error Status',
  default => 'Unknown Status'
};

echo $message . "\n";
