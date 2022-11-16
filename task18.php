<?php

function task18($array)
{
    $count = count($array);
    $result = [];
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count; $j++) {
            if ($array[$j][$i] < 0) {
                $result[] = $array[$j];
            }
        }
    }
    return $result;
}

var_dump(task18([[0, -1, 1, 2, 1], [1, 3, -3, 2, 2], [-1, 3, 3, 44, 4], [1, 2, 3, 4, -1], [4, 3, 2, -1, 1]]));