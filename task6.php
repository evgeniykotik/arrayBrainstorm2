<?php

function positive($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < 0) {
            return false;
        }
    }
    return true;
}

function task6($array)
{
    $count = count($array);
    $newArray = [];
    for ($i = 0; $i < $count; $i++) {
        if (positive($array[$i])) {
            $newArray[] = $array[$i];
        }
    }
    for ($i = 0; $i < $count; $i++) {
        $result[$i] = 0;
        for ($j = 0; $j < count($newArray[0]); $j++) {
            $result[$i] += $array[$i][$j] * $newArray[0][$j];
        }
    }
    return $result;
}

var_dump(task6([[2,4],[-6,1]]));