<!--Pas opdracht 11 zo aan, dat er geen “back_” en geen “.png” meer weer wordt
    gegeven in de links. Maak hierbij gebruik van de functie “str_replace()”.-->

<?php
$imagefiles = array_slice(scandir("img/back"), 2);
foreach ($imagefiles as $file) {
    $prettyFileName = str_replace(["back_", ".png"], "", $file);
    echo '<a href="opdracht12.php?naam=' . $file . '">' . $prettyFileName . '</a><br>';
}


if (isset($_GET['naam'])) {
    $image = $_GET['naam'];
    echo '<img src="img/back/' . $image . '">';
}
?>