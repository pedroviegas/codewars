/**
  * Project: Calculate the area of a regular n sides polygon inside a circle of radius r
  * By: viegas_pedro
  */
  <?php
  function areaOfPolygonInsideCircle($r, $n): float{
    return round(($n*$r*$r/2)*sin(2*pi()/$n),3);
  }