/**
  * Project: Bit Counting
  * By: viegas_pedro
  */
  <?php
  function countBits($n) {
    return array_count_values(str_split(base_convert($n, 10, 2)))[1];
 }