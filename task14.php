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

function znakoCheredovanie($arr)
{
    $count = 0;
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] > 0 && $arr[$i + 1] < 0) {
            $count++;
        } elseif ($arr[$i] < 0 && $arr[$i + 1] > 0) {
            $count++;
        }
    }
    return $count;
}

function task14($array)
{
    $newArray = [];
    $result = [];
    for ($i = 0; $i < count($array); $i++) {
        $newArray[] = znakoCheredovanie($array[$i]);
    }
    $result[0] = $array[keyOfMaximum($newArray)];
    $array[keyOfMaximum($newArray)] = [false];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] !== [false]) {
            $result[] = $array[$i];
        }
    }
    return $result;
}

var_dump(task14([[-1,1,-1],[1,2,3],[-1,1,-1,1,-1]]));