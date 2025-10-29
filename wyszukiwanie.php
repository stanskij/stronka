<?php
require_once('top.php');
require_once('dane_bazy.php');
?>
<h1>Wyszukiwanie książek w bazie ksiegarnia_internetowa</h1>
    <form action="#" method="post">
      Wyszukaj według:
      <select name="metoda">
        <option value="autor" />Autora
        <option value="tytul" />Tytułu
        <option value="isbn" />ISBN
      </select>
      <br /><br />
      Szukane wyrażenie:
        <input type="text" name="wyrazenie" />
        <input type="submit" name="wyszukaj" />
    </form>
<?php
$metoda = $_POST['metoda'];
$wyrazenie = $_POST['wyrazenie'];
if (!$metoda || !$wyrazenie)
      {
        echo 'Brak parametrów wyszukiwania, spóbuj ponownie!';
        require_once('bottom.php');
        exit;
      }
echo $metoda.'<br />';
echo $wyrazenie.'<br />';
$zapytanie = "select * from ksiazki where ".$metoda. " like '%".$wyrazenie."%'";
echo $zapytanie.'<br />';
$wynik = $baza->query($zapytanie);
$ile_znaleziono = $wynik->num_rows;
echo '<p> Liczba znalezionych książek: '.$ile_znaleziono.'</p>';
for ($i=0;$i<$ile_znaleziono;$i++)
      {
        $wiersz = $wynik->fetch_assoc();
        echo '<p><b>'.($i+1).'. Tytuł: '.$wiersz['tytul'].'</b><br />';
        echo 'Autor: '.$wiersz['autor'].'<br />';
        echo 'ISBN: '.$wiersz['isbn'].'<br />';
        echo 'Cena: '.$wiersz['cena'].'</p><br />';
      }
      $wynik->free();
      $baza->close();
require_once('bottom.php');
?>