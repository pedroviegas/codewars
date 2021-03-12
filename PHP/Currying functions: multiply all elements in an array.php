<?php
function multiply_all(array $ns)
{
    return function ($m) use ($ns) {
        return array_map(function ($n) use ($m) { return $n * $m; }, $ns);
    };
}