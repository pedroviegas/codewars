
/**
  * Project: Disease Spread
  * By: viegas_pedro
  */
  <?php

function epidemic($tm, $n, $s0, $i0, $b, $a) {
  $s = [$s0];
  $i = [$i0];
  $dt = $tm / $n;
  for($k = 1; $k <= $n; $k++){
    $s[$k] = $s[$k - 1] - $dt * $b * $s[$k - 1] * $i[$k - 1];
    $i[$k] = $i[$k - 1] + $dt * ($b * $s[$k - 1] * $i[$k - 1] - $a * $i[$k - 1]);
  }
  return floor(max($i));
}
