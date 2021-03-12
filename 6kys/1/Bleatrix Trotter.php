/**
  * Project: Bleatrix Trotter (The Counting Sheep)
  * By: viegas_pedro
  */
  <?php
  function trotter($n){
    if($n==0) return 'INSOMNIA';
    $p = 2;
    $nArr = preg_replace("/[$n]/","","0123456789");
    while($nArr!=''){
      $prod = $n*$p;
      $nArr = preg_replace("/[$prod]/","",$nArr);
      $p++;
    }
    return $prod;
  }