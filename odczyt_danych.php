<?php
require_once('top.php');
//include('dane_bazy.php');
require_once('dane_bazy.php');
$sql = "SELECT * FROM `klienci`";
//$sql = "SELECT * FROM klienci";
echo "<p>Dane z tabeli klienci</p>";
$wynik = $baza->query($sql);
if ($wynik->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>id</th><th>imię</th><th>nazwisko</th><th>adres</th><th>nr domu</th><th>nr mieszk</th><th>kod pocztowy</th><th>miejscowość</th></tr>";
    while($wiersz = $wynik->fetch_row()) {//lub fetch_assoc() wtedy musimy podać nazwy kolumn
        echo "<tr><td>" 
        . $wiersz[0] . "</td><td>" 
        . $wiersz[1] . "</td><td>"
        . $wiersz[2] . "</td><td>" 
        . $wiersz[3] . "</td><td>"
        . $wiersz[4] . "</td><td>"
        . $wiersz[5] . "</td><td>"
        . $wiersz[6] . "</td><td>"
        . $wiersz[7] 
        . "</td></tr>";
    }
    echo "</table>";
} else {echo "Brak wyników";}
// zamknięcie połączenia $baza->close();

echo "<p>Dane z tabeli książki</p>";
$sql = "SELECT * FROM `ksiazki`";
//$sql = "SELECT * FROM klienci";
$wynik = $baza->query($sql);
if ($wynik->num_rows > 0) {
    echo "<table>";
    while($wiersz = $wynik->fetch_assoc()) {
        echo "<tr><td>" 
        . $wiersz["isbn"]. "</td><td>" 
        . $wiersz["autor_imie"]. "</td><td>"
        . $wiersz["autor"] . "</td><td>" 
        . $wiersz["tytul"] . "</td><td>"
        . $wiersz["cena"] 
        . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników";
}

echo "<p>Dane z tabeli recenzje</p>";
$sql = "SELECT * FROM `recenzje_ksiazek`";
//$sql = "SELECT * FROM recenzje";
$wynik = $baza->query($sql);
if ($wynik->num_rows > 0) {
    echo "<table>";
    while($wiersz = $wynik->fetch_assoc()) {
        echo "<tr><td>" 
        . $wiersz["isbn"]. "</td><td>" 
        . $wiersz["recenzja"]
        . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak wyników";
}
$baza->close();
require_once('bottom.php');
?>