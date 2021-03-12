/**
  * Project: A disguised sequence
  * By: viegas_pedro
  */
  <?php
  function fcn($n) 
  {
    return $n == 0 ? 1 : fcn($n-1) * 2;
  }