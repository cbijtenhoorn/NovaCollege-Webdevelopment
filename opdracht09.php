<!--Vraag de gebruiker om een getal, druk daarna de tafel, volledig (1 t/m 10) af op het scherm.-->

<?php
if (isset($_GET['num'])) {
    $num = $_GET['num'];

    for($i = 1; $i <=10; $i++) {
    echo "$i x $num = " . $i * $num . "<br>";
    }
    echo "<br>";
}
?>

<form method="get" action="opdracht09.php">
    Voer een getal in: <input type="text" name="num" title="num"><br>
    <input type="submit" value="Verzenden">
</form>