<?php

function numbers(...$num)
{
    $result = [];
    for ($w = 0; $w < count($num); $w++) {
        for ($x = 0; $x < count($num); $x++) {
            for ($y = 0; $y < count($num); $y++) {
                for ($z = 0; $z < count($num); $z++) {
                    if ($w != $x && $num[$w] != 0 && $w != $y && $w != $z && $x != $y && $x != $z && $y != $z) {
                        $result[] = $num[$w] * (10 ** 3) + $num[$x] * (10 ** 2) + $num[$y] * (10 ** 1) + $num[$z];
                    }
                }
            }
        }
    }
    return $result;
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

function task4($array)
{
    $result = numbers(0, 1, 3, 8);
    $sumOfElements = 0;
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            if (intoArray($array[$i][$j], $result)) {
                $sumOfElements += $array[$i][$j];
            }
        }
    }
    return $sumOfElements;
}

var_dump(task4([[1038, 1, 0, 3, 8], [1039, 1033]]));