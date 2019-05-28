<?php
//使用数组
$n = 10;
$arr = array();
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        if ($j == 1 || $j == $i) {
            echo $arr[$i][$j] = 1;
        } else {
            echo $arr[$i][$j] = $arr[$i - 1][$j - 1] + $arr[$i - 1][$j];
        }
        echo " ";
    }
    echo PHP_EOL;
}

//新思路-不使用数组
$sum = 1;
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        if ($j > 1) {
            $sum = $sum * ($i - $j + 1) / ($j - 1);
            echo $sum;
        } else {
            echo 1;
        }
    }
    echo PHP_EOL;
}
