
/**
  * Project: Crack the PIN
  * By: viegas_pedro
  */
  <?php


function crack($hash){
  for ($x = 0; $x <100000; $x++) {
    $y = str_pad(strval($x),5,"0", STR_PAD_LEFT);
  if (md5($y) == $hash) {
    return $y;
  }
  }               
}