/**
  * Project: Ball Upwards
  * By: viegas_pedro
  */
  <?php
  function maxBall($v0) {
    $v0/=3.6;
    return round(($v0/9.81)*10);
}