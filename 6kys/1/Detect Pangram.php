
/**
  * Project: Detect Pangram
  * By: viegas_pedro
  */
  <?php

function detect_pangram($s) { 
  return preg_match_all('/([a-z])(?!.*\1)/i', $s, $m) && $m[0][25];
}