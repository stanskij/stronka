<?php
  require_once('php.php');
  require_once('top.php');
  poczatek_sesji();
?>
<?php
echo "<br />To jest strona z akcesoriami";
?>

<h1>Akcesoria</h1>
    <p><a href="sklep.php">Sklep</a></p>
    <p><a href="ksiazki.php">Książki</a></p>
    <br />
    <form action="akcesoria.php" method="post">
    <br />
      <input type="submit" name="pusty_koszyk"  value="Wyczyść koszyk" />
      <input type="submit" name="pokaz_koszyk"  value="Pokaż koszyk" /><br />
      <table>
      <tr>
      <td><img src="img/obr1.jpg" /></td>
      <td>
        <label><input type="checkbox" name="towary[]"  
          value="000000Płyta główna" />
          Płyta główna
        </label>
        </td>
      <td>cena <input type="text" name="cena0" value="200" style="width:75px;" /> zł
      </td>
      <td>ilość <input type="number" name="ile0" style="width:75px;" /> szt.
      </td>
      </tr>
      <tr>
      <td><img src="img/obr2.jpg" /></td>
      <td>
        <label><input type="checkbox" name="towary[]"  
          value="000001Procesor" />
          Procesor
        </label>
        </td>
      <td>cena <input type="text" name="cena1" value="300" style="width:75px;" /> zł
      </td>
      <td>ilość <input type="number" name="ile1" style="width:75px;" /> szt.
      </td>
      </tr>
      <tr>
      <td><img src="img/obr3.jpg" /></td>
      <td>
        <label><input type="checkbox" name="towary[]"  
          value="000002Karta graficzna" />
          Karta graficzna
        </label>
        </td>
      <td>cena <input type="text" name="cena2" value="120" style="width:75px;" /> zł
      </td>
      <td>lość <input type="number" name="ile2" style="width:75px;" /> szt.
      </td>
      </tr>
      </table>
    
      <input type="submit" name="do_koszyka"  value="Do koszyka" />
    </form>

<?php
do_koszyka(false);
pusty_koszyk();
pokaz_koszyk();
require_once('bottom.php');
?>