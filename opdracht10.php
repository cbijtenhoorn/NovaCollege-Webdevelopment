<!--Maak van alle elementen in de “img/back/” directory een link naar het bestand,
    waarbij als je op de link klikt het bestand wordt weergegeven in de browser.-->

<?php
$imagefiles = array_slice(scandir("img/back"), 2);
foreach ($imagefiles as $file) {
    echo '<a href="img/back/' . $file . '">' . $file . '</a><br>';
}