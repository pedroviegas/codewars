/**
  * Project: Braking well
  * By: viegas_pedro
  */
  <?php
  function dist($v, $mu) {
    $w = $v * 10 / 36;
    return $w + ($w * $w) / (2 * $mu * 9.81);
  }
  function speed($d, $mu) {
    $x = 2 * $mu * 9.81;
    return (-$x + sqrt($x * $x + 4 * $d * $x)) * 36 / 20;
  }
