<?php
function A($num) {
    $num -= 1;
    if($num > 0) {	
        echo "A is Calling B($num)n </br>";
        $num = B($num);
    }
    return $num;
}

function B($num) {
    $num -= 2;
    if($num > 0) {
        echo "B is Calling A($num)n </br>";
        $num = A($num);
    }
    return $num;
}

$num = 4;
echo "Calling A($num) <br/>";
echo 'Result: ' . A($num);