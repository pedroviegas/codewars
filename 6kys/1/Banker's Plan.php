/**
  * Project: Banker's Plan
  * By: viegas_pedro
  */
  <?php
  function fortune($f0, $p, $c0, $n, $i) {
     $k = 1;
     do{
        $k++;
        $f0 = $f0 * ($p/100 + 1) - $c0;
        $c0 *= ($i/100+1);
         }while (round($f0) > 0);
    if($n == 1) return false;
    return ($k > $n || ($k == $n && $k == 2)) ? true : false;
    }