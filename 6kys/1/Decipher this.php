
/**
  * Project: Decipher this!
  * By: viegas_pedro
  */
  <?php

function decipherThis($str) {
  return preg_replace_callback("/(\d+)([^ ]*)/", function ($m) {
    return chr($m[1]) . (strlen($m[2]) < 2 ? $m[2] : substr($m[2], -1) . substr($m[2], 1, -1) . $m[2][0]);
  }, $str);
}

