
/**
  * Project: Counting Duplicates
  * By: viegas_pedro
  */
  <?php

function duplicateCount($text) : int {
  $stats = array_count_values(str_split(strtolower($text)));
  return count(array_filter($stats, function($value) {return $value > 1;} ));
}