/**
  * Project: Coding Meetup #9 - Higher-Order Functions Series - Is the meetup age-diverse?
  * By: viegas_pedro
  */
  <?php

function is_age_diverse(array $a): bool {
  $rng = range(10, 100, 10);
  $res = array_unique(array_map(function($a){ return $a>=100 ? $a - ($a%100) : $a - ($a%10); }, array_column($a, 'age')));
  return count(array_intersect($res, $rng))==10;
}