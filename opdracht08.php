<!--Vraag de gebruiker om zijn naam en leeftijd, druk zijn naam dan het aantal keer af dat hij oud is.-->

<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];

    if (is_numeric($age))
        for ($i = 0; $i < $age; $i++) {
            echo $name . "<br>";
        }
    else {
        echo "Error: Je hebt geen getal ingevoerd als leeftijd" . "<br>";
    }
    echo "<br>";
}
?>

<form method="get" action="opdracht08.php">
    Wat is je naam? <input type="text" name="name" title="name"><br>
    Wat is je leeftijd? <input type="text" name="age" title="age"><br>
    <input type="submit" value="Verzenden">
</form>