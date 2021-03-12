/**
  * Project: Build a pile of Cubes
  * By: viegas_pedro
  */
  <?php
 function findNb($m) {
    while(true){
        $m -= $i++**3;
        if ($m == 0) return $i-1; elseif ($m < 0) return -1;
    }
}

function findNb($m) {
    while ($cube !== $m) {    
      $cube += pow(++$i, 3);    
      if ($cube > $m) return '-1';
    }
    return $i;
  }