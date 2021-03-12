

/**
  * Project: Cat Kata, Part 1
  * By: viegas_pedro
  */
  <?php

function peacefulYard($yard, $minDistance) {
   $coord = [];
   for( $i = 0; $i < count($yard); $i++)
   {
     for($j = 0; $j < strlen($yard[$i]); $j++)
     {
       if($yard[$i][$j] != '-')
       { 
         $coord['x'][] =$i;
         $coord['y'][]= $j;
       }
     }
   }
   for($i = 0; $i < count($coord['x']); $i++)
   {
     for($j = $i + 1; $j < count($coord['y']); $j++)
     {
       if(hypot(abs($coord['x'][$i] - $coord['x'][$j]), abs($coord['y'][$i] - $coord['y'][$j])) < $minDistance) return false;
     }
   }
   return true;
}