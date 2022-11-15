<?php

function task5($array, $p)
{
    $sumOfNumber = 0;
    $howManyString = count($array);
    for ($i = 0, $howManyColumn = count($array[0]); $i < $howManyColumn; $i++) {
        $count = 0;
        $sumColumn = 0;
        for ($j = 0; $j < $howManyString; $j++) {
            if ($array[$j][$i] % $p == 0) {
                $sumColumn += $array[$j][$i];
                $count++;
            }
            if ($count == $howManyString) {
                $sumOfNumber += $sumColumn;
            }
        }
    }
    return $sumOfNumber;
}

var_dump(task5([[2, 5, 3], [4, 5, 3]], 5));