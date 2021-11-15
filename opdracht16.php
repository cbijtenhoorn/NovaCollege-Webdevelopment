<!--Lees de inhoud van het bestand “img/content.txt” uit en schrijf deze naar “kopie.txt”.-->

<?php
$inhoud = file_get_contents("img/content.txt");
file_put_contents("kopie.txt", $inhoud);
?>