<!--Lees de inhoud van het bestand “img/content.txt” uit en plaats de inhoud in een textarea.-->

<?php
$inhoud = file_get_contents("img/content.txt");
echo '<textarea rows="40" cols="20">' . $inhoud . '</textarea>';
?>