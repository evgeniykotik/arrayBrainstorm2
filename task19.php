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

function task19($array, $p)
{
    for ($i = 0; $i < count($array); $i++) {
        $array[$i][] =$p;
        $array[$i] = sortOfArray($array[$i], false);
    }
    return $array;
}

var_dump(task19([[3,2,5],[4,3,8]],  4));