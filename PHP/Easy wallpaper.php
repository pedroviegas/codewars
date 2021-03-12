/**
  * Project: Easy wallpaper
  * By: viegas_pedro
  */
  <?php
function wallPaper($l, $w, $h) {
    return ['zero','one','two','three','four','five','six','seven','eight','nine','ten','eleven','twelve','thirteen','fourteen','fifteen','sixteen','seventeen','eighteen','nineteen','twenty'][$l*$w*$h ? ceil(($l + $w) * 2 * $h * 1.15 / 5.2) : 0];
}