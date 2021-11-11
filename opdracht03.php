<?php
$getal = 5.5;

if ($getal < 0 || $getal > 10) {
    echo "Foutieve invoer, het getal moet tussen de 0 en 10 liggen.";
}
else if ($getal >= 5.5) {
    echo "Hoera! Je hebt een voldoende gehaald!";
}
else {
    echo "Helaas, een onvoldoende.. Volgende keer beter!";
}