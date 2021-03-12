
/**
  * Project: Clocky Mc Clock-Face
  * By: viegas_pedro
  */
  <?php


function what_time_is_it(float $angle): string {
  $hours = str_pad(((floor($angle / 30) ?: 12) . ''), 2, '0', STR_PAD_LEFT);
  $minutes = str_pad((floor(fmod($angle, 30) * 2) . ''), 2, '0', STR_PAD_LEFT);
  return $hours . ':' . $minutes;
}