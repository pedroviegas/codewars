/**
  * Project: Array Deep count
  * By: viegas_pedro
  */
  <?php
function deep_c(array $a): int {
    return preg_match_all('/a:(\d+)/', serialize($a), $matches) ? array_sum($matches[1]) : 0;
  }