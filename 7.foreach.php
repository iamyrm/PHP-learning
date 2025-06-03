<?php

$basket = [
  'Apple' => 3,
  'Banana' => 4
];

$total = 0;

foreach ($basket as $item => $quantity) {
  echo "$item: $quantity pieces\n";
  $total += $quantity;
}
echo "Total items: $total pieces\n";
