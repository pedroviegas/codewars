/**
  * Project: n - Cycle
  * By: viegas_pedro
  */
  <?php
  function cycle($n) {
    $res = 1;
      for ($i=1; $i < $n; $i++) {
        $res = ($res * 10) % $n;
        if ($res == 0) return -1;
        else if ($res == 1) return $i;
      }
    return -1;
    }