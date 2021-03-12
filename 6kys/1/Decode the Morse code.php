
/**
  * Project: Decode the Morse code
  * By: viegas_pedro
  */
  <?php

function decode_morse(string $morse_code): string {
  return implode(' ', array_map(function($word){
    return implode('', array_map(function($c){
      return MORSE_CODE[$c];
    }, explode(' ', trim($word))));
  }, explode('   ', trim($morse_code))));
}
