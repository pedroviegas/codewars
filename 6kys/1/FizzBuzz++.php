
/**
  * Project: FizzBuzz++
  * By: viegas_pedro
  */
  <?php

function fizzbuzz_plusplus(array $numbers, array $words): array {
  $arr = [];
  $count = count($numbers);
  $range = array_product($numbers);
  foreach (range(1, $range) as $v) {
    $i = 0;
    $res = '';
    for ($i; $i < $count; $i++) {
      if ($v%$numbers[$i] === 0 ) {
        $res .= $words[$i];
      }
    }
    
    $arr[] = $res ?: $v;
}
  
  return $arr;
}

