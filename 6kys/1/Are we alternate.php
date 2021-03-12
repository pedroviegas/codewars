/**
  * Project: Are we alternate
  * By: viegas_pedro
  */
  <?php
  function isAlt($s){
    $res1 = [];
    $k = preg_match("/[aeiou]/i", $s[0]) ? 0 : 1;
    for($i=$k;$i<strlen($s);$i+=2){ $res1[]=$i; }
    $res2 = array_keys(preg_grep("/[aeiou]/i", str_split($s)));
    return $res1==$res2; 
  }