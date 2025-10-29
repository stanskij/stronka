<?php
$cookie_name = "uczen";
$cookie_value = "Jan Kowalski";
setcookie($cookie_name, $cookie_value, time() + 300, "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<title>WAI klasa 3 ti</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/normalize.css">
<!-- <link rel="stylesheet" href="css/styl_resp.css"> -->
<?php
//recuire_once("wybor_skorki.php");
echo '<link rel="stylesheet" href="css/style1v2.css">';
?>
<link rel="stylesheet" href="css/menu_rozwijane.css">
<link rel="stylesheet" href="css/menu_pionowe.css">
<link rel="stylesheet" href="css/galeria.css">
<script src="javascript/script.js" async></script>
</head>
  <body onLoad=window.open('javascript/galeria_javascript.html', '', 'toolbar=no,menubar=no,scrollbars=no, resizable=no,status=no,location=no,directories=no,top=400, left=500,height=700,width=400')>
  <div id="toTopButton">To top <span id="test"></span></div>
    <div id="container">
    <header>
    <img src="img/baner_glowny.png" />
    </header>
  <nav>
    <ol>
      <li><a href="#">Skrypty php</a>
        <ul>
          <li><a href="obliczenia_3ti.php">obliczenia</a></li>
          <li><a href="trojmian_3ti.php">trójmian</a></li>
          <li><a href="petla_for_3ti.php">pętla for</a></li>
          <li><a href="silnia_3ti.php">silnia</a></li>
          <li><a href="ciasteczka.php">ciasteczka</a></li>
        </ul>
      </li>
      <li><a href="#">Javascript</a>
        <ul>
          <li><a href="okna.php">okna</a></li>
          <li><a href="operatory_arytmetyczne.php">operatory arytmetyczne</a></li>
          <li><a href="zmienne.php">zmienne</a></li>
          <li><a href="kalkulator.php">kalkulator</a></li>
          <li><a href="trojmian.php">trójmian</a></li>
          <li><a href="petla_for.php">pętla for</a></li>
          <li><a href="generator_tabeli.php">generator tabeli</a></li>
          <li><a href="instrukcja_warunkowa.php">instrukcja warunkowa</a></li>


        </ul>
      </li>
      <li><a href="#">js - obiekty</a>
        <ul>
         <li><a href="javascript_obiekt_string.php">obiekt string</a></li>
         <li><a href="javascript_obiekt_date.php">obiekt date</a></li>
         <li><a style="cursor:pointer;" onClick="window.open('javascript/galeria_javascript.html', '', 'status=no,toolbar=no,menubar=no,scrollbars=no, resizable=no,status=no,location=no,directories=no,top=200, left=200,height=400,width=400')">obiekt window</a></li>
         <li><a href="javascript_odliczanie.php">odliczanie</a></li>
      </ul>
      </li>
      <li><a href="#">egzamin EE09</a>
        <ul>
           <li><a href="javascript_kalkulator.php">kalkulator (egzamin)</a></li>
           <li><a href="javascript_paliwo.php">paliwa (egzamin)</a></li>
        </ul>
      </li>
      <li><a href="#">Dodawanie</a>
        <ul>
          <li><a href="odczyt_danych.php">odczytaj dane</a></li>
          <li><a href="zapis_danych_klientow.php">dodaj klienta</a></li>
          <li><a href="dodanie_ksiazki.php">dodaj książkę</a></li>
          <li><a href="dodanie_recenzji.php">dodaj recenzję</a></li>
        </ul>
      </li>

      <li><a href="#">Wyszukiwanie</a>
        <ul>    
          <li><a href="wyszukiwanie.php">Szukaj książki</a></li>
          <li><a href="wyszukiwanie1.php">Szukaj klienta</a></li>
          <li><a href="wyszukiwanie2.php">Szukaj recenzji</a></li>
        </ul>
      </li>

      <li><a href="#">Html i css</a>
        <ul>
          <li><a href="elementy_blokowe.php">bloki</a></li>
        </ul>
      </li>

      <li><a href="#">Sesje</a>
        <ul>
          <li><a href="sklep.php">Sklep</a></li>
          <li><a href="logowanie.php">Logowanie</a></li>
        </ul>
      </li>
      <li><a href="galeria.php">Galeria</a>
       
      </li>

  </ol>
  </nav> 
    <hr>
    <main>
    <aside>
        <ul>
          <li><a href="ciasteczka.php">ciasteczko</a></li>
          <li><a href="usun_ciastko.php">usuń ciastko</a></li>
          <li><a href="logowanie.php">Logowanie</a></li>
          <li><a href="#">pozycja 4</a></li>
        </ul>
        <br />
    <form action="#" method="POST">
                <label for="imie">Wybierz styl:</label>
                    <select id="skorka" name="skorka">
                        <option value="mario">Mario</option>
                        <option value="luigi">Luigi</option>
                        <option value="yoshi">Yoshi</option>
                    </select> 
            <input type="submit" value="Wybierz">        
            </form>
            <?php
require_once("connect.php");
if ($polaczenie->connect_error) {
    die("Błąd połączenia: " . $baza->connect_error);
}

$polaczenie->set_charset("utf8");
$nazwa = $_POST["skorka"];
$sql  = 'UPDATE `themes` SET `active` = "a" WHERE nazwa = "'.$nazwa.'"';
$sql1 = 'UPDATE `themes` SET `active` = ""';
//$sql = "UPDATE `themes` SET `active` = \"a\" WHERE nazwa = \"'.$nazwa.'\"";
echo "<br />".$sql1;
echo "<br />".$sql;
if (IsSet($nazwa)) 
{
    if ($polaczenie->query($sql1) === TRUE && $polaczenie->query($sql) === TRUE) {
    echo "<br />Rekordy zaktualizowany prawidłowo.";
    } else {
    echo "Błąd: " . $sql . "
" . $polaczenie->error;
};};
?>
    </aside>
    
<article>