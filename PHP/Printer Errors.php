/**
  * Project: Printer Errors
  * By: Pviegas
  */
function printerError($s) {
    return preg_match_all('/[^a-m]/', $s).'/'.strlen($s);
}