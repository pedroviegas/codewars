/**
  * Project: Drying Potatoes
  * By: viegas_pedro
  */
  <?php
    function potatoes($p0, $w0, $p1) {
    return intdiv($w0 * (100 - $p0), (100 - $p1));
}