
/**
  * Project: Digit Recovery
  * By: viegas_pedro
  */
  <?php

function recover($str){
  $strlen = strlen($str);
  $valueByDigitNormalized = array_flip(['EORZ','ENO','OTW','EEHRT','FORU','EFIV','ISX','EENSV','EGHIT','EINN']);
  $hits = [];
  
  for ($i = 0; $i < $strlen -2; $i++) {
    for($j = 3; $j <= 5; $j++) {
      $strToTestAsArray = str_split((substr($str, $i, $j)), 1);
      sort($strToTestAsArray);
      $strToTest = implode('', $strToTestAsArray);
      
      if (array_key_exists($strToTest, $valueByDigitNormalized)) {
        $hits[] = $valueByDigitNormalized[$strToTest];
        break;
      }
    }
  }
  
  if (count($hits) === 0) {
    return 'No digits found';
  }
    
  return implode('', $hits);
}

