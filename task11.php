<?php

function isNullArray($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] !== 0) {
            return false;
        }
    }
    return true;
}

function task11($array)
{
    $result = [];
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        if (!isNullArray($array[$i])) {
            $result[] = $array[$i];
        }
    }
    return $result;
}

var_dump(task11([[0, 0, 0], [0, 1, 3, 4, 5]]));