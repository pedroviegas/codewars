
/**
  * Project: Color Choice
  * By: viegas_pedro
  */
  <?php

function checkchoose($m, $n) {
    $result = 1;
    for ($i = 0; $i <= $n / 2 + 1; ++$i) {
        if ($result == $m)
            return $i;
        $result = intval($result * ($n - $i) / ($i + 1));
    }
    return -1;
}

