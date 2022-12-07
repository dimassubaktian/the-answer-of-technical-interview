<?php

function rotate_array($array, $k)
{
    if ($k >= 0 && $k <= 105) {
        if (count($array) >= 1 && count($array) <= 105) {
            $value_range = range(-231, 230);

            foreach ($array as $a) {
                if (!in_array($a, $value_range)) {
                    return 'Array value is not allowed';
                }
            }

            for ($i = 0; $i < $k; $i++) {
                array_unshift($array, array_pop($array));
                $array = $array;
            }

            return $array;
        } else {
            return 'Array Length is not allowed';
        }
    } else {
        return 'K is not in range';
    }
}

function rotate_array_2($array, $k)
{
    if ($k >= 0 && $k <= 105) {
        if (count($array) >= 1 && count($array) <= 105) {
            $value_range = range(-231, 230);

            foreach ($array as $a) {
                if (!in_array($a, $value_range)) {
                    return 'Array value is not allowed';
                }
            }

            $k = $k % count($array);

            $temp = [];

            for ($i = 0; $i < count($array); $i++) {
                $temp[($i + $k) % count($array)] = $array[$i];
            }

            for ($i = 0; $i < count($array); $i++) {
                $array[$i] = $temp[$i];
            }

            return $array;
        } else {
            return 'Array Length is not allowed';
        }
    } else {
        return 'K is not in range';
    }
}

function rotate_array_3($array, $k)
{
    if ($k >= 0 && $k <= 105) {
        if (count($array) >= 1 && count($array) <= 105) {
            $value_range = range(-231, 230);

            foreach ($array as $a) {
                if (!in_array($a, $value_range)) {
                    return 'Array value is not allowed';
                }
            }

            $k = $k % count($array);


            $array = reverse($array, 0, count($array) - 1);
            $array = reverse($array, 0, $k - 1);
            $array = reverse($array, $k, count($array) - 1);
            return $array;
        } else {
            return 'Array Length is not allowed';
        }
    } else {
        return 'K is not in range';
    }
}

function reverse($array, $start, $end)
{
    while ($start < $end) {
        $temp = $array[$start];
        $array[$start] = $array[$end];
        $array[$end] = $temp;
        $start++;
        $end--;
    }
    return $array;
}



$a = [1, 2, 3, 4, 5, 6, 7];
$k = 3;


print_r(rotate_array($a, $k));
print_r(rotate_array_2($a, $k));
print_r(rotate_array_3($a, $k));
