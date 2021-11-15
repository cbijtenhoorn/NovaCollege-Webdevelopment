<!--Lees de inhoud van “index.php” uit en plaats de inhoud in een textarea.-->

<?php
$inhoud = file_get_contents("index.php");
echo '<textarea rows="4" cols="40">' . $inhoud . '</textarea>';
?>