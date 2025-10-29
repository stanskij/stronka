<?php
$baza = new mysqli('localhost', 'uczen', 'qwerty', 'uczen_ksiegarnia_internetowa_3ti');
//$baza = new mysqli('localhost', 'root', '', 'baza');
if ($baza->connect_error) {
    die("Błąd połączenia: " . $baza->connect_error);
}
$baza->set_charset("utf8");//ustalenie kodowania polskich znaków
?>