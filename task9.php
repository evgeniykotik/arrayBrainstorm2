<?php

function minInColumn($array)
{
    $arrayCopy = $array;
    for ($i = 1; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[0]); $j++) {
            if ($arrayCopy[0][$j] > $arrayCopy[$i][$j]) {
                $arrayCopy[0][$j] = $arrayCopy[$i][$j];
            }
        }
    }
    $minInColumn = $arrayCopy[0];
    return $minInColumn;
}

function keyOfFirstNegativeInColumn($array)
{
    $result = [];
    for ($i = 0; $i < count($array[0]); $i++) {
        for ($j = count($array) - 1; $j >= 0; $j--) {
            if ($array[$j][$i] < 0) {
                $result[$i] = $j;
            }
        }
    }
    return $result;
}

function task9($array)
{
    $result=[];
    $keyOfFirstNegativeInColumn = keyOfFirstNegativeInColumn($array);
    $minInColumn = minInColumn($array);
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[0]); $j++) {
            if ($keyOfFirstNegativeInColumn[$j] === null) {
               $result[0][$j]=$minInColumn[$j];
               $result[$i+1][$j]=$array[$i][$j];
            } else {
                $result[0][$j]=$array[0][$j];
                $result[$i+1][$j]=$array[$i][$j];
            }
        }
    }
    for ($i = 0; $i < count($minInColumn); $i++) {
        if ($keyOfFirstNegativeInColumn[$i]!==null) {
            $result[$keyOfFirstNegativeInColumn[$i]+1][$i]=$minInColumn[$i];
        }
    }
    return $result;
}

var_dump(task9([[-1, 3, 8, 5, 4], [-2, 4, 6, -8, 2], [2, 2, 5, 4, 2]]));
