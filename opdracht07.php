<!--Maak een formulier wat de gebruiker vraagt om een HTML-kleurcode, stel deze kleur daarna in als achtergrond.-->

<?php
if (isset($_POST['colour'])) {
    $colour = $_POST['colour'];
    echo "De HTML-code van je kleur is " . $colour . "<br>";
    echo "<body style='background-color:$colour'>";
}

?>
<form method="post" action="opdracht07.php">
    Voer hier een HTML-kleurcode in: <input type="text" name="colour" title="colour"><br>
    <input type="submit" value="Verzenden">
</form>

<form method="post" action="opdracht07.php">
    Voer hier een HTML-kleurcode in: <input type="color" name="colour" title="colour"><br>
    <input type="submit" value="Verzenden">
</form>