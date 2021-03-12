
/**
  * Project: Consecutive strings
  * By: viegas_pedro
  */
  <?php

function longestConsec($strarr, $k) {
    $arr=[];$n=count($strarr);
    if($strarr==null ||  $n = 0 || $k > $n || $k <= 0 ) return '';
    foreach ($strarr as $key => $value)
    array_push($arr, implode('', array_slice($strarr, $key,$k)));
    return $arr[array_search(max(array_map('strlen',$arr)), array_map('strlen',$arr))];
}