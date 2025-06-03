<?php

echo "Rocket launch countdown";

for ($i = 10; $i > 0; $i--) {
  echo $i . "...";
  if (1 == $i) {
    echo "Liftoff!";
  }
  sleep(1);
}
