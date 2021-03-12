/**
  * Project: A rule of divisibility
  * By: viegas_pedro
  */
  <?php
  function thirt($n) {
    $rem = [1, 10, 9, 12, 3, 4];
    $rev = strrev($n);
    $sum =0;
    foreach(str_split($rev) as $num){
      $m = array_shift($rem);
      $sum+=($num*$m);
      array_push($rem, $m);
    }
    return strlen($sum)<=2 ? $sum : thirt($sum);
  }