<?php
function descendingOrder(int $n): int {
  $tmp = str_split((string)$n);
  rsort($tmp);
  return implode('', $tmp);
}