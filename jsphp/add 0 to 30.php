<?php
function addIntegers() {
    $total = 0;

    for ($i = 0; $i <= 30; $i++) {
        $total += $i;
    }

    return $total;
}
echo "The sum of all integers from 0 to 30 is: " . addIntegers();

?>
