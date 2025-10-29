<?php
session_start();
	
if (!isset($_SESSION['zalogowany']))
{
    header('Location: logowanie.php');
    exit();
}
require_once('top.php');
require_once('dane_bazy.php');
?>
<form action="#" method="POST">
<fieldset>
    <legend>Dane książki:</legend>
Podaj ISBN:<input type="text" name="isbn" /><br />
    Napisz recenzję:<textarea name="recenzja" cols="60" rows="10">
    Tu wstaw recenzję</textarea><br />
   
Rodzaj literatury<br />
    <input type="radio" id="male" name="typ" value="powiesc">
        <label for="male">powieść</label><br>
    <input type="radio" id="female" name="typ" value="dramat">
        <label for="female">dramat</label><br>
    <input type="radio" id="other" name="typ" value="inne">
        <label for="other">inne</label><br />
        </fieldset> 
        <input type="submit" name="dodaj" value="dodaj dane" />
        <input type="reset">
</form>        
<form>
<fieldset>
    <legend>Dane użytkownika:</legend>
        Czym lubisz jeżdzić: <br />
    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <label for="vehicle1"> rower</label><br>
    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
    <label for="vehicle2"> samochód</label><br>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
    <label for="vehicle3"> autobus</label>
    <br />
    <label for="password">Podaj hasło do logowania do serwisu</label>
    <input type="password" id="haslo" name="haslo">
    <br />
    <label for="cars">Wybierz swój ulubiony samochód:</label>
<select id="cars" name="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select> 
</fieldset>
 
</form>
<?php
    $isbn = $_POST['isbn'];//pobranie nazwiska z formularza
    $recenzja = $_POST['recenzja'];//pobranie adresu z formularza
        if (!$isbn || !$recenzja) 
            {echo "Musisz wstawić dane do formularza";
                require_once('bottom.php');exit;}
        else {
                echo $isbn.'<br />';//wyświetlenie pobranego nazwiska, adresu, miejscowości
                echo $recenzja.'<br />';
                $baza = new mysqli($dbhost, $dbuser, $dbpass, $dbname);// połączenie z bazą, wersja obiektowa
                if ($baza->connect_error) 
                    {die("Błąd połączenia: " . $baza->connect_error); }//sprawdzenie poprawności połączenia z bazą
                    $baza->set_charset("utf8");//ustalenie kodowania polskich znaków
                    $sql = 'INSERT INTO `recenzje_ksiazek` VALUES ("'.$isbn.'" ,"'.$recenzja.'")';//utworzenie zapytania wstawiającego sql
                    //wysłanie danych do bazy ze sprawdzeniem poprawności wstawienia danych
                    if ($baza->query($sql) === TRUE) {echo "Nowy rekord utworzony prawidłowo.";} 
                    else {echo "Błąd: " . $sql . " " . $baza->error;}
                $baza->close();//zamknięcie połączenia z bazą - konieczne !!!!!!!!!!!!!
                require_once('bottom.php');
            }
?>