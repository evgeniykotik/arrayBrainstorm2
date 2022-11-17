<?php

function task15($array)
{
    $count = null;
    $keyOfMin = null;
    for ($i = 0; $i < count($array[0]); $i++) {
        $countOfOdd = 0;
        for ($j = 0; $j < count($array); $j++) {
            if ($array[$j][$i] % 2 !== 0) {
                $countOfOdd++;
            }
        }
        if ($count === null || $countOfOdd < $count) {
            $count = $countOfOdd;
            $keyOfMin = $i;
        }
    }
    for ($i = 0; $i < count($array); $i++) {
        $temp = $array[$i][$keyOfMin];
        unset($array[$i][$keyOfMin]);
        $array[$i][] = $temp;
    }
    return $array;
}

var_dump(task15([[1, 3, 4, 8], [4, 5, 4, 6], [4, 8, 2, 5]]));