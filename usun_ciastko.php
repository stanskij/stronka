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
setcookie("uczen", "", time() - 3600);
if(!isset($_COOKIE["uczen"])) {
    echo "Ciasteczko ". $cookie_name ." zostało usunięte";
}
else {
    "Ciasteczko ". $cookie_name ." zostało usunięte";
};
?>


<?php
require_once('bottom.php');
?>