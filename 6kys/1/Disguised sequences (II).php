
/**
  * Project: Disguised sequences (II)
  * By: viegas_pedro
  */
  <?php

/*
w1=(3,4),w2=(-1,-1),W=(w1,w2)
W^{n}=n*W+(1-n)E
*/

function v1($n, $p) {
   return (2*$n+1)*$p;
}
function u1($n, $p) {
   return ($n+1)*$p;
}
