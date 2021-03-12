
/**
  * Project: Create Phone Number
  * By: viegas_pedro
  */
  <?php


function createPhoneNumber($numbersArray) {
  preg_match('/(\d{3})(\d{3})(\d{4})/', implode('', $numbersArray), $matches);
  return '('.$matches[1].') '.$matches[2].'-'.$matches[3];
}