<?php
  require_once('php.php');
  require_once('top.php');
  poczatek_sesji();
?>
    <h1>Sklep internetowy</h1>
    <p><a href="ksiazki.php">Książki</a></p>
    <p><a href="akcesoria.php">Akcesoria</a></p>
    <br />
    <p>
    <form action="sklep.php" method="post">
      <input type="submit" name="pusty_koszyk"  value="Wyczyść koszyk" />
      <input type="submit" name="pokaz_koszyk"  value="Pokaż koszyk" />
    </form>
    </p>
    <br />
<?php
    pusty_koszyk();
    pokaz_koszyk();
    require_once('bottom.php');
?>