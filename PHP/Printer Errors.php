/**
  * Project: Printer Errors
  * By: viegas_pedro
  */
  <?php
function printerError($s) {
    return preg_match_all('/[^a-m]/', $s).'/'.strlen($s);
}