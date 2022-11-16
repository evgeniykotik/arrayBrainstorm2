<?php

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

function handleArray($array, $number)
{
    $newArray = [];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % $number == 0) {
            $newArray[] = $array[$i];
        }
    }
    $newArray = sortOfArray($newArray);
    for ($i = 0; $i < count($array); $i++) {
        if (!intoArray($array[$i], $newArray)) {
            $newArray[] = $array[$i];
        }
    }
    return $newArray;
}

function task17($array, $number)
{
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        $array[$i] = handleArray($array[$i], $number);
    }
    return $array;
}

var_dump(task17([[9, 20, 30, 8, 14, 15, 27], [17, 18, 16, 12, 3, 5]], 3));