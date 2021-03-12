/**
  * Project: Circularly Sorted Array
  * By: viegas_pedro
  */
  <?php




function isCircleSorted($arr) {
    $false_count = 0;
    $length = count($arr);
    foreach ($arr as $i => $e) {
        if ($e > $arr[($i + 1) % $length])
            $false_count++;
    }
    return $false_count < 2;
}

