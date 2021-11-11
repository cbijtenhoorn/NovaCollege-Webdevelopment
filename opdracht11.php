<a href="opdracht11.php?naam=back_blue">Back Blue</a><br>
<a href="opdracht11.php?naam=back_gray">Back Gray</a><br>
<a href="opdracht11.php?naam=back_green">Back Green</a><br>
<a href="opdracht11.php?naam=back_purple">Back Purple</a><br>

<?php
if (isset($_GET['naam'])) {
    $image = $_GET['naam'];
echo "<img src='img/back/$image>";
}
?>