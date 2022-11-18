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

function keyOfNegative($array)
{
    $negativeKey = null;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < 0) {
            $negativeKey = $i;
        }
    }
    return $negativeKey;
}

function task13($array, $arr)
{
    $key = [];
    for ($i = 0; $i < count($array); $i++) {
        if (keyOfNegative($array[$i]) !== null) {
            $key[] = keyOfNegative($array[$i]);
        }
    }
    if ($key !== []) {
        $key = maxOfArray($key);
        $result = [];
        for ($i = 0; $i < count($array); $i++) {
            for ($j = 0; $j < $key; $j++) {
                $result[$i][$j] = $array[$i][$j];
            }
        }
        for ($i = 0; $i < count($array); $i++) {
            $result[$i][$key] = $arr[$i];
        }
        for ($i = 0; $i < count($array); $i++) {
            for ($j = $key; $j < count($array[0]); $j++) {
                $result[$i][$j+1]=$array[$i][$j];
            }
        }
        return $result;
    } else {
        for ($i = 0; $i < count($array); $i++) {
            $array[$i][] = $arr[$i];
        }
        return $array;
    }
}


var_dump(task13([[-1, 3, 2, -5, 4], [-2, 4, 6, 8, 2], [2, 3, 5, 4, 2]], [1, 2, 3]));