/**
  * Project: Buying a car
  * By: viegas_pedro
  */
  <?php
  function nbMonths($startPriceOld, $startPriceNew, $savingPerMonth, $percentLossByMonth) {
    $month = 0;
    $savedMoney = 0;
    while($startPriceOld + $savedMoney < $startPriceNew){
      $savedMoney += $savingPerMonth;
      if(++$month % 2 == 0) $percentLossByMonth += 0.5;
      $startPriceOld *= 1 - $percentLossByMonth/100;
      $startPriceNew *= 1 - $percentLossByMonth/100;
    }
    return [$month, round($startPriceOld + $savedMoney - $startPriceNew)];
  }