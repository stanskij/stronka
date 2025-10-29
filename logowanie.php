<?php
session_start();
	
if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
{
    header('Location: gra.php');
    exit();
}
require_once('top.php');
?>


<?php
echo "To jest logowanie";
?>
<br /><br />
	
	<form action="zaloguj.php" method="post">
	
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
		<input type="submit" value="Zaloguj się" />
	
	</form>

<?php
require_once('bottom.php');
?>