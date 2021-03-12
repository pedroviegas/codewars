/**
  * Project: Catalog
  * By: viegas_pedro
  */
  <?php


function catalog($s, $article) {
    preg_match_all('/.*?e>(.*'.$article.'.*?)<.*?x>(.*?)<.*?y>(.*?)<.*/',
                   $s, $m, PREG_SET_ORDER);    
    $result = [];
    foreach($m as $v){
      $result[] = $v[1].' > prx: $'.$v[2].' qty: '.$v[3];
    }
    return preg_replace('/^$/', 'Nothing', join("\n", $result));
}