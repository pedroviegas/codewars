/**
  * Project: Brick pyramid
  * By: viegas_pedro
  */
  <?php
  function weight($row, $pos) {
    $nba = (pow($row, 2) + $row) / 2;
    $wfb = (pow(2, $row) - 1) / (pow(2, $row));
    if ($pos == 0 || $pos == $row) {
      return $wfb;
    } else {
      return ($nba - ($wfb * 2)) / ($row - 1);
    }
  }