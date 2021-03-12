/**
  * Project: Calculate the function f(x) for a simple linear sequence (Medium)
  * By: viegas_pedro
  */
  <?php


function get_function($sequence) {
  $first = $sequence[0];
  $diff = $sequence[1] - $first;
  for ($i = 1, $len = count($sequence); $i < $len; $i++) {
      if ($sequence[$i] - $sequence[$i - 1] <> $diff) {
          return "Non-linear sequence";
      }
  }

  $f = function ($x) use ($diff, $first) {
      return $diff * $x + $first;
  };

  return $f;
}