/**
  * Project: Over the Road
  * By: viegas_pedro
  */
<?php
function overTheRoad($address, $street){ 
  return $street + ($street - $address) + 1;
}