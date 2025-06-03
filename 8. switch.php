<?php

$size = "M";

switch ($size) {
  case "S":
  case "M":
    echo "Small or Medium Size\n";
    break;
  case "L":
  case "XL":
    echo "Large or Extra Large Size\n";
    break;
  default:
    echo "Unknown Size\n";
}

echo "----------if statement below----------\n";

if ("M" == $size || "S" == $size) {
  echo "Small or Medium Size\n";
} else if ("L" == $size || "XL" == $size) {
  echo "Large or Extra Large Size\n";
} else {
  echo "Unknown Size";
}
