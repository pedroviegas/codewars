/**
  * Project: Basics 08: Find next higher number with same Bits 
  * By: viegas_pedro
  */
  <?php
  function nextHigher($n) {
    $right = 0; $nb = 0; $motif = 0; $res = 0;
    $right = $n & -$n;
    $nb = $n + $right;
    $motif = $n ^ $nb;
    $motif /= $right;
    $motif >>= 2;
    $res = $nb | $motif;
    return $res;
  }