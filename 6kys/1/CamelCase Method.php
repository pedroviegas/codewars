
/**
  * Project: CamelCase Method
  * By: viegas_pedro
  */
  <?php

function camel_case(string $s): string {
$s = ucwords($s);
$s = preg_replace('/\s(?=)/', '', $s);
return $s ;
}