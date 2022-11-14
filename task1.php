<?php

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

function task1($array)
{
    $main = [];
    $upMain = [];
    $downMain = [];
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array); $j++) {
            if ($i == $j) {
                $main[] = $array[$i][$j];
            } elseif ($i < $j) {
                $upMain[] = $array[$i][$j];
            } else {
                $downMain[] = $array[$i][$j];
            }
        }
    }
    return "Cумма элементов на главной диагонали: " . sumOfArray($main) . ","
        . "выше главной дигонали: " . sumOfArray($upMain) . ", ниже: " . sumOfArray($downMain) . ".";
}

var_dump(task1([[1, 1, 3], [1, 1, 3], [1, 1, 3]]));