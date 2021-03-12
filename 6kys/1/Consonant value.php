
/**
  * Project: Consonant value
  * By: viegas_pedro
  */
  <?php

function solve($s) {
  return max(array_map(function ($e) {
      return array_sum(array_map(function ($f) {
          return ord($f) - 96;
        }, str_split($e)));
    }, preg_split("/[aeiou]+/", $s)));
}
