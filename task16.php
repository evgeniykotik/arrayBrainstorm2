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

function intoArray($char, $array)
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $char) {
            return true;
        }
    }
    return false;
}

function task16($array)
{
    $arrayOfMaximum = [];
    for ($i = 0; $i < count($array); $i++) {
        $arrayOfMaximum[] = maxOfArray($array[$i]);
    }
    $arrayOfMaximumSort = sortOfArray($arrayOfMaximum, false);
    $result = [];
    for ($i = 0; $i < count($arrayOfMaximumSort); $i++) {
        for ($j = 0; $j < count($array); $j++) {
            if (intoArray($arrayOfMaximumSort[$i], $array[$j])) {
                $result[] = $array[$j];
                $array[$j] = [];
            }
        }
    }
    return $result;
}

var_dump(task16([[1, 9], [7, 1], [8, 2], [1, 9,7]]));