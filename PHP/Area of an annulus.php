/**
  * Project: Area of an annulus
  * By: viegas_pedro
  */
  <?php

function annulus_area(int $a): float {
  return round(M_PI*($a/2)**2,2);
}