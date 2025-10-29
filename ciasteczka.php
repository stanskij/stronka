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
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie nazwane '" . $cookie_name . "' nie ustawiono!";
} else {
  echo "Ciasteczko: '" . $cookie_name . "'<br>";
  echo "Wartość: " . $_COOKIE[$cookie_name];
}
?>


<?php
require_once('bottom.php');
?>