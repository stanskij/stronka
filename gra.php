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

	echo '<p>Witaj, '.$_SESSION['user'].' zostałeś zalogowany! <br /><br /><a href="logout.php"><button>Wyloguj się!</button></a></p>';
	/*
	echo "<p><b>Drewno</b>: ".$_SESSION['drewno'];
	echo " | <b>Kamień</b>: ".$_SESSION['kamien'];
	echo " | <b>Zboże</b>: ".$_SESSION['zboze']."</p>";
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	echo "<br /><b>Dni premium</b>: ".$_SESSION['dnipremium']."</p>";
	*/
?>
<?php
	require_once('bottom.php');	
?>
