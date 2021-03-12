<?php
function nbYear($p0, $percent, $aug, $p) {
    for ($year = 0; $p0 < $p; $year++){
            $p0 = (int)($p0 + $p0 * $percent / 100 + $aug);
        }
        return $year;
}