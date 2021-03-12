/**
  * Project: Array
  * By: viegas_pedro
  */
  <?php
  function arrayDiff($a, $b) {
    return array_reverse(array_reverse(array_diff($a, $b)));
  }