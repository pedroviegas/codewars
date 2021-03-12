/**
  * Project: Largest 5 digit number in a series
  * By: viegas_pedro
  */
<?php
function solution(string $s): int {
   $max = 0;
   for($i = 0; $i < strlen($s); $i++) {
     $max = max($max,intval(substr($s, $i, 5)));
   }
   return $max;
}