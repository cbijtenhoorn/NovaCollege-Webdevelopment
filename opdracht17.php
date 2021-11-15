<!--Maak een formulier waarbij de inhoud van een textarea geschreven wordt naar het
    bestand “opdracht17.txt”.-->

<form method="post" action="opdracht17.php">
    Voer hier je tekst in:<br>
    <textarea name="text17" rows="10" cols="15"></textarea><br>
    <input type="submit" value="(╯°□°)╯︵ ┻━┻">
</form>

<?php
if (isset($_POST['text17'])) {
    $text = $_POST['text17'];
    file_put_contents('opdracht17.txt', $text);
}
?>