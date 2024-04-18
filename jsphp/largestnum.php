<?php
function findLargest($arr) {
    if (count($arr) == 0) {
        return "Array is empty";
    }

    $max = $arr[0]; 
    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value; 
        }
    }

    return $max;
}

$numbers = array(2, 4, 9, 6, 23, 12, 34, 0, 1);

echo "The largest number is " . findLargest($numbers);
?>
