
/**
  * Project: Computing the complex logarithm function
  * By: viegas_pedro
  */
  <?php

function logc($z) {
  list($x, $y) = $z; // z = x + iy
  return ($z==[0,0]) ? null : [log(sqrt($x**2+$y**2)), atan2($y,$x)];
}

