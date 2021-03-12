/**
  * Project: Bouncing Balls
  * By: viegas_pedro
  */
  <?php
  function bouncingBall(float $h, float $bounce, float $window): int {
    return ($bounce > 0 && $bounce < 1 && $window < $h) ? ceil(log($window/$h) / log($bounce))*2 - 1 : -1;
  }