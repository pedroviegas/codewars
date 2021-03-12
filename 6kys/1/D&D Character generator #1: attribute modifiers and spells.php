
/**
  * Project: D&D Character generator #1: attribute modifiers and spells
  * By: viegas_pedro
  */
  <?php

function char_attribute(int $score): array {
  echo $score.'<br>';
  if ($score == 0) return ['modifier' => 0, 'maximum_spell_level' => -1, 'extra_spells' => []];
  $modifier = floor(($score - 10) / 2);
  $a = [
    'modifier' => $modifier,
    'maximum_spell_level' => $score < 10 ? -1 : ($score > 19 ? 9 : $score % 10),
    'extra_spells' => getSpells($modifier)
  ];
  return $a;
}

function getSpells($modifier) {
  if ($modifier < 1) return [];
  $n = ceil($modifier / 4);
  $k = 4 - $n*4 + $modifier;
  $a = array_fill(0, $k, $n);
  
  for ($i = $n-1; $i > 0 && count($a) < 9; $i--) {
    $a = array_pad($a, count($a) + 4, $i);
  }
  return array_slice($a, 0, 9);
}

