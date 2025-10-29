<?php
session_start();
	
if (!isset($_SESSION['zalogowany']))
{
    header('Location: logowanie.php');
    exit();
}
require_once('top.php');
?>
<form action="#" method="POST">
    Podaj nazwisko:<input type="text" name="nazwisko" /><br />
    Podaj imię:<input type="text" name="imie" /><br />
    Podaj adres:<input type="text" name="adres" /><br />
    Podaj nr domu:<input type="text" name="nr_domu" /><br />
    Podaj nr mieszkania:<input type="text" name="nr_mieszk" /><br />
    Podaj kod pocztowy:<input type="text" name="kod_pocztowy" /><br />
    Podaj miejscowość:<input type="text" name="miejscowosc" /><br />

    <input type="submit" name="dodaj" value="dodaj dane" />
</form>
<?php
    $nazwisko = $_POST['nazwisko'];//pobranie nazwiska z formularza
    $imie = $_POST['imie'];//pobranie adresu z formularza
    $adres = $_POST['adres'];//pobranie adresu z formularza
    $nr_domu = $_POST['nr_domu'];//pobranie adresu z formularza
    $nr_mieszk = $_POST['nr_mieszk'];//pobranie adresu z formularza
    $kod_pocztowy = $_POST['kod_pocztowy'];//pobranie miejscowości z formularza
    $miejscowosc = $_POST['miejscowosc'];//pobranie adresu z formularza
if (!$nazwisko || !$imie || !$adres || !$nr_domu || !$nr_mieszk || !$kod_pocztowy || !$miejscowosc) 
    {
        echo "Musisz wstawić dane do formularza"; 
        require_once('bottom.php');
        exit;
    }
else {
echo "Wprowadziłeś następujące dane: ";
echo $nazwisko.', ';//wyświetlenie pobranego nazwiska, adresu, miejscowości
echo $adres.', ';
echo $miejscowosc.'<br />';
require_once('dane_bazy.php');
//$sql = 'INSERT INTO klienci VALUES (NULL, imie ,nazwisko , ...);
//wstawienie zmiennej do sql: "'.$imie.'" ...
//$sql = 'INSERT INTO klienci VALUES (NULL,"'.$imie.'" ,"'.$nazwisko.'" ,"'.$adres.'" ,"'.$nr_domu.'", "'.$nr_mieszk.'","'.$kod_pocztowy.'","'.$miejscowosc.'")';//utworzenie zapytania wstawiającego sql
$sql = "INSERT INTO klienci VALUES (NULL,'$imie' ,'$nazwisko' ,'$adres' ,'$nr_domu','$nr_mieszk','$kod_pocztowy','$miejscowosc')";//utworzenie zapytania wstawiającego sql

//wysłanie danych do bazy ze sprawdzeniem poprawności wstawienia danych
if ($baza->query($sql) === TRUE) {
    echo "Nowy rekord utworzony prawidłowo.";
} else {
    echo "Błąd: " . $sql . " " . $baza->error;
}
$baza->close();//zamknięcie połączenia z bazą - konieczne !!!!!!!!!!!!!
require_once('bottom.php');
}
?>