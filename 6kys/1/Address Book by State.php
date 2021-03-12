/**
  * Project: Address book
  * By: viegas_pedro
  */
  <?php
  define("STATES", [
    "AZ" => 'Arizona',
    'CA'=> 'California',
    'ID'=> 'Idaho',
    'IN'=> 'Indiana',
    'MA'=> 'Massachusetts',
    'OK'=> 'Oklahoma',
    'PA'=> 'Pennsylvania',
    'VA'=> 'Virginia'
  ]);
  function byState($str) {
    $str = str_replace(",","",$str);
    $addresses = explode(PHP_EOL, $str);
    sort($addresses);
    $result = "";
    $prefix = "";
    foreach (STATES as $code => $state) {
      $alreadyFoundOne = false;
      foreach ($addresses as $address) {
        if (substr($address, -2) === $code) {
          if (!$alreadyFoundOne) {
            $result .= $prefix . $state . "\r\n";
            $alreadyFoundOne = true;
            $prefix = " ";
          }
          $result .= "..... " . substr($address, 0, -2) . $state . "\r\n";
        }
      }
    }
    return substr($result,0,-2);
  }