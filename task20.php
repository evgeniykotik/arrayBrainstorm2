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

function sumOfArray($array)
{
    $sum = 0;
    $i = 0;
    while (isset($array[$i])) {
        $sum += $array[$i];
        $i++;
    }
    return $sum;
}

function intoArray($char, $array)
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $char) {
            return true;
        }
    }
    return false;
}

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

function task20($array)
{
    $sum = [];
    for ($i = 0; $i < count($array); $i++) {
        $sum[] = sumOfArray($array[$i]);
    }
    $result[] = $array[keyOfMaximum($sum)];
    $array[keyOfMaximum($sum)] = [false];
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i][0] > $array[$j][0]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] !== [false])
            $result[] = $array[$i];
    }
    return $result;
}

var_dump(task20([[8, 7], [6, 5], [4, 12], [8, 8], [4, 12]]));
