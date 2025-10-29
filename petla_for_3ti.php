<?php
session_start();
	
if (!isset($_SESSION['zalogowany']))
{
  header('Location: logowanie.php');
  exit();
}
require_once('top.php');
?>
  
<?php
  for ($i=1;$i<=100;$i++)
  {
    $liczba=$i;//ponieważ zaczynamy wyświetlanie od 
    $napis=(string)$liczba;//rzutujemy integer na string
    if ($i<100) $napis.=', ';//oddzielamy kolejne liczby przecikami, oprócz ostatniej
    echo $napis;
  }
?>
<?php
require_once('bottom.php');
?>
