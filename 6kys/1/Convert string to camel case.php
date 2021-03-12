
/**
  * Project: Convert string to camel case
  * By: viegas_pedro
  */
  <?php


function toCamelCase($str){
  $word = ucwords(str_replace(['-','_'], [' ',' '], $str));
  return ctype_upper($str[0]) ? str_replace(' ','', $word) : str_replace(' ','', lcfirst($word));
}