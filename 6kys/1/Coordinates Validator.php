
/**
  * Project: Coordinates Validator
  * By: viegas_pedro
  */
  <?php

function isValidCoordinates($coordinates) {
  $pattern = "/^[-]?[0-9]*([.][0-9]*)?, [-]?[0-9]*([.][0-9]*)?$/";
  preg_match($pattern, $coordinates, $matches);
  if (sizeof($matches) == 0) return false;
  $coords = explode(", ", $coordinates);
  if ((abs(floatval($coords[0])) <= 90) && (abs(floatval($coords[1])) <= 180)) return true;
  return false;
}

