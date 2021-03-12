
/**
  * Project: Computing the complex exponential function
  * By: viegas_pedro
  */
  <?php

function expc($z) {
  list($x, $y) = $z; // z = x + iy
  
  // e^z = e^(x+iy) = e^x * $e^iy
  // e^iy = cos(y) + isin(y) Euler's Formula
  // real part e^xcos(y)
  // imaginary part e^xsin(y)
  return [exp($x)*cos($y), exp($x)*sin($y)];
}