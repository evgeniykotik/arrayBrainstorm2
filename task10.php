<?php

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

function keyOfMinimum($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == minOfArray($arr)) {
            return $i;
        }
    }
}

function keyOfMaximum($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == maxOfArray($arr)) {
            return $i;
        }
    }
}

function task10($array)
{
    $min = null;
    $max = null;
    $keyMin = null;
    $keyMax = null;
    $howManyStrings=count($array);
    for ($i = 0, $howManyColumn=count($array[0]); $i < $howManyColumn; $i++) {
        for ($j = 0 ; $j < $howManyStrings; $j++) {
            if ($min === null || $min > $array[$j][$i]) {
                $min = $array[$j][$i];
                $keyMin = $i;
            }
            if ($max === null || $max < $array[$j][$i]) {
                $max = $array[$j][$i];
                $keyMax = $i;
            }
        }
    }
    for ($i = 0; $i < count($array); $i++) {
        $temp[] = $array[$i][$keyMax];
        $array[$i][$keyMax] = $array[$i][$keyMin];
        $array[$i][$keyMin] = $temp[$i];
    }
    return $array;
}

var_dump(task10([[-1, 3, 3], [1, 3, 3]]));