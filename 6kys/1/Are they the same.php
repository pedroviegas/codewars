/**
  * Project: Are they the same
  * By: viegas_pedro
  */
  <?php
  function comp($a1, $a2) {
    if (is_null($a1) || is_null($a2)) {
      return false;
    }
    $b = array_map('square', $a1);
    sort($a2);
    sort($b);
    return $a2 == $b;
  }
  function square($n) {
    return $n * $n;
  }