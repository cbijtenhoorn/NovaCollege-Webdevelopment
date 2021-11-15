<!--Pas opdracht 17 aan, zodat de pagina eerst “opdracht17.txt” uitleest, en de inhoud in
    de textarea wordt geplaatst en daarna kan worden aangepast zoals in opdracht 17.-->

<?php
$inhoud = file_get_contents("opdracht17.txt");
?>

<form method="post">
    Voer hier je tekst in:<br>
    <?php echo '<textarea name="text17" rows="10" cols="15">' . $inhoud . '</textarea><br>'; ?>
    <input type="submit" value="(╯°□°)╯︵ ┻━┻">
</form>

<?php
if (isset($_POST['text17'])) {
    $text = $_POST['text17'];
    file_put_contents('opdracht17.txt', $text);
}
?>