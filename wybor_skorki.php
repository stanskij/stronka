<?php
require_once("connect.php");
if ($polaczenie->connect_error) {
    die("Błąd połączenia: " . $baza->connect_error);
}
$sql2 = 'SELECT `nazwa` from `themes` WHERE `active` = "a"';
//echo $sql2;
$wynik = $polaczenie->query($sql2);
if ($wynik->num_rows > 0) {
    echo "<table>";
    while($wiersz = $wynik->fetch_assoc()) {
        echo "<tr><td>" 
        . $wiersz["nazwa"]. "</td><td>" 
        . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników";
}
$baza->close();