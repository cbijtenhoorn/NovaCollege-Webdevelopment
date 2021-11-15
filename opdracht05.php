<!--Vul een variabele met een getal, druk daarna de tafel af van dit getal.-->

<?php
$getal = 5;

for ($i = 1; $i <= 10; $i++) {
    echo "$i x $getal = " . $i * $getal . "<br>";
}