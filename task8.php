<?php

function maxOfArray($arr)
{
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($max < $arr[$i]) {
            $max = $arr[$i];
        }
    }
    return $max;
}

function keyOfMaximum($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == maxOfArray($arr)) {
            return $i;
        }
    }
}

function minOfArray($arr)
{
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    return $min;
}

function deleteEvenNumberBetweenMax($array)
{
    $copyArray = $array;
    $keyMax1 = keyOfMaximum($array);
    $copyArray[$keyMax1] = minOfArray($array);
    $keyMax2 = keyOfMaximum($copyArray);
    $start = $keyMax1 <= $keyMax2 ? $keyMax1 + 1 : $keyMax2 + 1;
    $end = $keyMax1 < $keyMax2 ? $keyMax2 : $keyMax1;
    for ($i = $start; $i < $end; $i++) {
        if ($array[$i] % 2 == 0 && $array[$i] > 0) {
            unset($array[$i]);
        }
    }

    return $array;
}

function task8($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = deleteEvenNumberBetweenMax($array[$i]);
    }
    return $array;
}

var_dump(task8([[-1, 12, 10, 8, -6, 4, 15], [-1, 15, 10, 8, -6, 4, 11]]));
