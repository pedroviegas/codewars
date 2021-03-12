
/**
  * Project: Count the smiley faces!
  * By: viegas_pedro
  */
  <?php

function count_smileys($arr): int {
  $matches  = preg_grep ('/^(:|;)(-|~)?(D|\))$/i', $arr);
  return count($matches);
}