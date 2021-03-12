/**
  * Project: Backwards Read Primes
  * By: viegas_pedro
  */
  <?php
  function backwardsPrime($start_inclusive, $stop_inclusive) {
    $is_prime = function ($n) {
      if ($n <= 2)
        return $n === 2;
      if (!($n % 2))
        return false;
      foreach (range(3, sqrt($n), 2) as $i)
        if (!($n % $i))
          return false;
      return true;
    };
    return array_values(array_filter(range($start_inclusive, $stop_inclusive), function ($n) use ($is_prime) {
      return $is_prime($n) && $n !== ($m = intval(strrev(strval($n)))) && $is_prime($m);
    }));
  }