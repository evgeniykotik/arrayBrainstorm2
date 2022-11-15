<?php

function averageOfPositive($arr)
{
    $sum = 0;
    $count = 0;
    $i = 0;
    while (isset($arr[$i])) {
        if ($arr[$i] > 0) {
            $sum += $arr[$i];
            $count++;
        }
        $i++;
    }
    if ($count == 0) {
        return 0;
    }
    return $sum / $count;
}

function task2($array)
{
    $indexOfMin = null;
    $valueOfMin = null;

    for ($i = 0; $i < count($array); $i++) {
        $average = averageOfPositive($array[$i]);
        if ($valueOfMin === null || $valueOfMin > $average) {
            $valueOfMin = $average;
            $indexOfMin = $i;
        }
    }
    return $indexOfMin;
}

var_dump(task2([[7,3],[2,4,8,5],[2,3,4], [4,5,6],[6,-8,8]]));