<?php
session_start();
	
if (!isset($_SESSION['zalogowany']))
{
    header('Location: logowanie.php');
    exit();
}
require_once('top.php');
require_once('dane_bazy.php');
?>
<form action="#" method="POST">
    Podaj ISBN:<input type="text" name="isbn" /><br />
    Podaj imię autora:<input type="text" name="imie" /><br />
    Podaj nazwisko autora:<input type="text" name="autor" /><br />
    Podaj tytuł:<input type="text" name="tytul" /><br />
    Podaj cenę:<input type="text" name="cena" /><br />
    <input type="submit" name="dodaj" value="dodaj dane" />
</form>
<?php
    $isbn = $_POST['isbn'];//pobranie nazwiska z formularza
    $imie = $_POST['imie'];//pobranie adresu z formularza
    $autor = $_POST['autor'];//pobranie adresu z formularza
    $tytul = $_POST['tytul'];//pobranie adresu z formularza
    $cena = $_POST['cena'];//pobranie adresu z formularza
if (!$isbn || !$imie || !$autor || !$tytul || !$cena) 
    {
        echo "Musisz wstawić dane do formularza"; 
        require_once('bottom.php');
        exit;
    }
else {

echo $nazwisko.'<br />';//wyświetlenie pobranego nazwiska, adresu, miejscowości
echo $adres.'<br />';
echo $miejscowosc.'<br />';
$baza = new mysqli($dbhost, $dbuser, $dbpass, $dbname);// połączenie z bazą, wersja obiektowa
if ($baza->connect_error) {
    die("Błąd połączenia: " . $baza->connect_error);
}//sprawdzenie poprawności połączenia z bazą
$baza->set_charset("utf8");//ustalenie kodowania polskich znaków
$sql = 'INSERT INTO `ksiazki` VALUES ("'.$isbn.'" ,"'.$imie.'" ,"'.$autor.'" ,"'.$tytul.'", "'.$cena.'")';//utworzenie zapytania wstawiającego sql
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