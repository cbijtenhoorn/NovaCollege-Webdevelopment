<!--Pas opdracht 10 zo aan, dat er niet direct wordt gelinkt naar het bestand, maar dat
    met GET een parameter wordt meegegeven die de afbeelding in een “<img>” element laat zien.-->

<?php
$imagefiles = array_slice(scandir("img/back"), 2);
foreach ($imagefiles as $file) {
    echo '<a href="opdracht11.php?naam=' . $file . '">' . $file . '</a><br>';
}


if (isset($_GET['naam'])) {
    $image = $_GET['naam'];
    echo '<img src="img/back/' . $image . '">';
}
?>