<?
require_once("connect.php");
if ($baza->connect_error) {
    die("Błąd połączenia: " . $baza->connect_error);
}
$baza->set_charset("utf8");
$nazwa = $_POST["skorka"];
$sql = "UPDATE themes SET active = 'a' WHERE nazwa = $nazwa";
if ($baza->query($sql) === TRUE) {
    echo "Rekord zaktualizowany prawidłowo.";
} else {
    echo "Błąd: " . $sql . "
" . $baza->error;
}
?>