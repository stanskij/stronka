<?php
  require_once('php.php');
  require_once('top.php');
  poczatek_sesji();
  echo "<br />To jest strona z książkami";
?>
<h1>Książki</h1>
    <p><a href="sklep.php">Sklep</a></p>
    <p><a href="akcesoria.php">Akcesoria</a></p>
    <br />
    <form action="ksiazki.php" method="post">
      <br />
      <input type="submit" name="pusty_koszyk"  value="Wyczyść koszyk" />
      <input type="submit" name="pokaz_koszyk"  value="Pokaż koszyk" /><br />
      <table>
      <tr>
      <td><img src="img/ks1.jpg" /></td>
      <td>
        <label><input type="checkbox" name="towary[]" value="000000Jak zdać egzamin, autor: Józef Nauczyciel" />
          Jak zdać egzamin, autor: Józef Nauczyciel
        </label>
      </td>
      <td>
      cena <input type="text" name="cena0" value="20" style="width:75px;" /> zł
      </td>
      <td>
      ilość <input type="number" min="0" name="ile0" style="width:75px;" /> szt.
      </td>
      </tr>
      <tr>
      <td><img src="img/ks2.jpg" /></td>
      <td>
        <label><input type="checkbox" name="towary[]" value="000001Podstawy PHP, autor: Jan Mądry" />
          Podstawy PHP, autor: Jan Mądry
        </label>
        </td>
      <td>
      cena <input type="text" name="cena1" value="40" style="width:75px;" /> zł
      </td>
      <td>
      ilość <input type="number" min="0" name="ile1" style="width:75px;" /> szt.
      </td>
      </tr>
      <tr>
      <td><img src="img/ks3.jpg" /></td>
      <td>
        <label><input type="checkbox" name="towary[]" value="000002HTML 5, autor: Piotr Programista" />
          HTML 5, autor: Piotr Programista
        </label>
        </td>
      <td>
      cena <input type="text" name="cena2" value="60" style="width:75px;" /> zł
      </td>
      <td>
      ilość <input type="number" min="0" name="ile2" style="width:75px;" /> szt.
      </td>
      </tr>
    </table>
      <input type="submit" name="do_koszyka"  value="Do koszyka" />
      
    </form>

<?php
do_koszyka(true);
pusty_koszyk();
pokaz_koszyk();
require_once('bottom.php');
?>