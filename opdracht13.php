<!--Lees de inhoud van het bestand “img/content.txt” uit en print deze op het scherm.-->

<pre>
<?php
$inhoud = file_get_contents("img/content.txt");
echo $inhoud;
?>
</pre>