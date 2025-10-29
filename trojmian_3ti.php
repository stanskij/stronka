<?php
session_start();
	
if (!isset($_SESSION['zalogowany']))
{
  header('Location: logowanie.php');
  exit();
}
require_once('top.php');
?>
    <form action="" method="post">
      Liczba a: <input type="text" name="pole_1" />
      Liczba b: <input type="text" name="pole_2" />
      Liczba c: <input type="text" name="pole_3" />
      <input type="submit" name="wysyla_na_serwer" value="Wyślij" />
    </form>
    <?php
        $ok=true;
     if (isset($_POST['wysyla_na_serwer']))
     {
      $a=$_POST['pole_1'];
      $b=$_POST['pole_2'];
      $c=$_POST['pole_3'];
      if (is_numeric($a) && is_numeric($b) && is_numeric($c) && ($ok)) 
      {
        $delta=$b*$b-4*$a*$c;
        echo "<b>Delta wynosi:</b> ".$delta;
      }
      else 
        {
        $ok=false;
        echo 'Błędne dane';
        }
    }
?>
    <?php
    require_once('bottom.php');
    ?>
