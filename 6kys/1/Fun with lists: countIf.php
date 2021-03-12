
/**
  * Project: Fun with lists: countIf
  * By: viegas_pedro
  */
  <?php


function count_if($head, $p, $res=0) {
  while($head){ if( $p($head->data) ){++$res;} $head= $head->next; }
  return $res;
}

