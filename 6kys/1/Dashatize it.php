
/**
  * Project: Dashatize it
  * By: viegas_pedro
  */
  <?php



function dashatize(int $n): string {
  return preg_replace('/\-\-/', "-", preg_replace('/^\-+|\-+$/', "", implode(array_map(function ($d) {return $d % 2 ? "-$d-" : $d;}, str_split(strval($n))))));
}