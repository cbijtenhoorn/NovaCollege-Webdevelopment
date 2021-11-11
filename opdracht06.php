<?php
$num1 = 0;
$num2 = 1;

for ($i = 0; $i <= 1000; $i = $i + $num1) {
    $num3 = $num1 + $num2;
    echo $num3 . "<br>";
    $num1 = $num2;
    $num2 = $num3;
}