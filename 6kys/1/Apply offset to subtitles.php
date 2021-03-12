/**
  * Project: Apply offset
  * By: viegas_pedro
  */
  <?php
  function subs_offset_apply($string, $offset){
    $start = substr($string, 0, 2) * 3600000 + substr($string, 3, 2) * 60000 + substr($string, 6, 2) * 1000 + substr($string, 9, 3);
    $stop = substr($string, 17, 2) * 3600000 + substr($string, 20, 2) * 60000 + substr($string, 23, 2) * 1000 + substr($string, 26, 3);
    $new_start = $start + $offset;
    $new_stop = $stop + $offset;
    if($new_start < 0 OR $new_start > 99*3600000 + 59*60000 + 59*1000 + 999) return "Invalid offset";
    if($new_stop < 0 OR $new_stop > 99*3600000 + 59*60000 + 59*1000 + 999) return "Invalid offset";
    return convert($new_start)." --> ".convert($new_stop).substr($string, 29);  
  }
  function convert($ms){  
    $h = floor($ms/3600000);
    $m = floor(($ms - $h * 3600000)/60000);
    $s = floor(($ms - $h * 3600000 - $m * 60000)/1000);
    $ml = $ms - $h * 3600000 - $m * 60000 - $s * 1000;
    return sprintf("%'.02d", $h).":".sprintf("%'.02d", $m).":".sprintf("%'.02d", $s).",".sprintf("%'.03d", $ml);
  }