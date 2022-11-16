<?php

function primeNumber($number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function task12($array)
{
    $temp = [];
    $howManyStrings = count($array);
    $howManyColumn = count($array[0]);
    for ($i = 0; $i < $howManyColumn; $i++) {
        $countSimple = 0;
        for ($j = 0; $j < $howManyStrings; $j++) {
            if (primeNumber($array[$j][$i])) {
                $countSimple++;
            }
            if ($countSimple == $howManyStrings)
                $temp[] = $i;
        }
    }
    for ($i = 0; $i < $howManyStrings; $i++) {
        for ($j = 0; $j < count($temp); $j++) {
            unset($array[$i][$temp[$j]]);
        }
    }
    return $array;
}

var_dump(task12([[4, 3, 4, 3, 7], [4, 3, 4, 3, 8]]));