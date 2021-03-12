/**
  * Project: Floating-point Approximation (II)
  * By: viegas_pedro
  */
  <?php

function interp($f, $l, $u, $n) {
    $arr = [];
    for ($i = 0; $i < $n; $i++) {
      $arr[] = floor($f($l + ($u - $l) / $n * $i) * 100.0) / 100.0;
    }
    return $arr;
}

