<?php
if (isset($_GET['colour'])) {
    $colour = $_GET['colour'];
    echo "De HTML-code van je kleur is " . $colour . "<br>";
    echo "<body style='background-color:$colour'>";
}

?>
<form method="get" action="opdracht07.php">
    Voer hier een HTML-kleurcode in: <input type="text" name="colour" title="colour"><br>
    <input type="submit" value="Verzenden">
</form>

<form method="get" action="opdracht07.php">
    Voer hier een HTML-kleurcode in: <input type="color" name="colour" title="colour"><br>
    <input type="submit" value="Verzenden">
</form>