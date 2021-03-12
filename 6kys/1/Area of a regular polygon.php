/**
  * Project: Area of a regular
  * By: viegas_pedro
  */
  <?php
  function area_of_regular_polygon(string $s): string {
    list($n, $t1, $t2, $length, $unit, $t4) = explode(" ", $s);
    if (("$t1 $t2 $t4"!="sides of each")||($n<3)||($n!= round($n))) return "Invalid input";
    $a = $length/2;
    $r = round($a*$a*$n/tan(M_PI/$n),2);
    $r = number_format($r, 2, '.', '');
    $r = "$r sq.$unit";
    return $r;
  }