
/**
  * Project: Fruit Machine
  * By: viegas_pedro
  */
  <?php

function fruit($reels, $spins){
  # Good luck
  $scoreMap = [
    "Jack" => 1,
    "Queen" => 2,
    "King" => 3,
    "Bar" => 4,
    "Cherry" => 5,
    "Seven" => 6,
    "Shell" => 7,
    "Bell" => 8,
    "Star" => 9,
    "Wild" => 10
  ];
  $res = [];
  $res[] = $scoreMap[$reels[0][$spins[0]]];
  $res[] = $scoreMap[$reels[1][$spins[1]]];
  $res[] = $scoreMap[$reels[2][$spins[2]]];
  sort($res);
  if($res[0] == $res[2]) return 10 * $res[0];
  if($res[0] == $res[1]) return $res[0] * (($res[2] == 10) ? 2 : 1);
  if($res[1] == $res[2]) return $res[1];
  return 0;
  
}

