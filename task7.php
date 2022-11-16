<?php

function task7($array)
{
    $howManyStrings = count($array);
    $maxUpMain = null;
    $maxDownMain = null;
    for ($i = 0; $i < $howManyStrings; $i++) {
        for ($j = 0; $j < $howManyStrings; $j++) {
            if ($i < $j) {
                if ($maxUpMain === null || $maxUpMain < $array[$i][$j]) {
                    $maxUpMain = $array[$i][$j];
                }
            } elseif ($i > $j) {
                if ($maxDownMain === null || $maxDownMain < $array[$i][$j]) {
                    $maxDownMain = $array[$i][$j];
                }
            }
        }
    }
    for ($i = 0; $i < $howManyStrings; $i++) {
        for ($j = 0; $j < $howManyStrings; $j++) {
            if ($i < $j && $array[$i][$j] == $maxUpMain) {
                $array[$i][$j] = $maxDownMain;
            } elseif ($i > $j && $array[$i][$j] == $maxDownMain) {
                $array[$i][$j] = $maxUpMain;
            }
        }
    }
    return $array;
}

var_dump(task7([[2, 3, 4], [5, 2, 4], [3, 5, 4]]));