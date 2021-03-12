
/**
  * Project: Cryptography #1 - Viva Cesare
  * By: viegas_pedro
  */
  <?php

function CaesarCryptoEncode($text, $shift) {
  if (!trim($text)) return '';
  $ab = array_merge(range('a', 'z'), range('A', 'Z'));
  return join(array_map(function($c) use($ab, $shift) 
    { $i = array_search($c, $ab); return $i!==false? $ab[($i+$shift%52+52)%52]: $c; }, 
    str_split($text)));
}
