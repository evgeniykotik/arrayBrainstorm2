<?php

function sortOfArray($arr, $ascending = true)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($ascending ? $arr[$i] > $arr[$j] : $arr[$i] < $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}

function task3($array)
{
    $minResult = null;
    $maxResult = null;
    for ($i = 0; $i < count($array); $i++) {
        $sortArrayAsc = sortOfArray($array[$i]);
        $sortArrayDesc = sortOfArray($array[$i], false);
        if ($array[$i] == $sortArrayAsc || $array[$i] == $sortArrayDesc) {
            if ($minResult === null || $minResult > $sortArrayAsc[0]) {
                $minResult = $sortArrayAsc[0];
            }
            if ($maxResult === null || $maxResult < $sortArrayDesc[0]) {
                $maxResult = $sortArrayDesc[0];
            }
        }
    }
    return "минимальное значение: " . $minResult .
        " максимальное значение: " . $maxResult;
}

var_dump(task3([[1, 2, 3, 8], [19, 4, 3, 0, -1], [7, 5, 2, -8]]));