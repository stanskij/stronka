<?php
  require_once('php.php');
  poczatek_sesji();
  require_once('top.php');
?>
<?php
echo "<br />To jest strona z książkami";
?>

<h1>Książki</h1>
    <p><a href="sklep.php">Sklep</a></p>
    <p><a href="akcesoria.php">Akcesoria</a></p>
    <br />
    <form action="ksiazki.php" method="post">
      <p>
        <label><input type="checkbox" name="towary[]"  
          value="000000Jak zdać egzamin, autor: Józef Nauczyciel" />
          Jak zdać egzamin, autor: Józef Nauczyciel
        </label>
        , cena<input type="text" name="cena0" value="20" style="width:30px;" />
        , ilość<input type="text" name="ile0" style="width:30px;" />
      </p>
      <p>
        <label><input type="checkbox" name="towary[]"  
          value="000001Podstawy PHP, autor: Jan Mądry" />
          Podstawy PHP, autor: Jan Mądry
        </label>
        , cena<input type="text" name="cena1" value="40" style="width:30px;" />
        , ilość<input type="text" name="ile1" style="width:30px;" />
      </p>
      <p>
        <label><input type="checkbox" name="towary[]"  
          value="000002HTML 5, autor: Piotr Programista" />
          HTML 5, autor: Piotr Programista
        </label>
        , cena<input type="text" name="cena2" value="60" style="width:30px;" />
        , lość<input type="text" name="ile2" style="width:30px;" />
      </p>
    
      <input type="submit" name="do_koszyka"  value="Do koszyka" />
      <input type="submit" name="pusty_koszyk"  value="Pusty koszyk" />
      <input type="submit" name="pokaz_koszyk"  value="Pokaż koszyk" />
    </form>

<?php
do_koszyka(true);
pusty_koszyk();
pokaz_koszyk();
require_once('bottom.php');
?>