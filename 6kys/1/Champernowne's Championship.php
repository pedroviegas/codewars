/**
  * Project: Champernowne's Championship
  * By: viegas_pedro
  */
  <?php

function champernowneDigit($n) {
  if (!is_int($n) || $n <= 0) {
    return NAN;
  }
  $d = 0;     
  $count = 0; 
  $pivot = 0; 
            do {
              $d++;
              $pivot = $count;
                 $count += getNumChars($d);
  } while($n > $count);
  $offset = ceil(($n - $pivot) / $d);
  $number = $offset + ($d === 1 ? 0 : 10 ** ($d - 1)) - 1;
  $numOffset = $n - ($pivot + 1 + (($offset - 1) * $d));
  return (int)(sprintf("%d", $number)[(int)$numOffset]);
}

function getNumChars($n) {
  $range = (10 ** $n);
  if ($n > 1) { $range -= (10 ** ($n - 1)); }
  return $range * $n;
}