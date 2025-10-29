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
        <input type="submit" name="pokaz_date_i_czas" value="Pokaż aktualną datę i czas" />
    </form>
    <form action="" method="post">
      Liczba a: <input type="text" name="pole_1" />
      Liczba b: <input type="text" name="pole_2" />
      <input type="submit" name="wysyla_na_serwer" value="Wyślij" />
    </form>
    <?php
    $dzis=getdate();//funkcja getdate() daje nam aktualną datę i czas
    $dzien=$dzis['mday'];
    $miesiac=$dzis['mon'];
    $rok=$dzis['year'];
    $godz=$dzis['hours'];
    $min=$dzis['minutes'];
    $sek=$dzis['seconds'];
    $dzien_tyg=$dzis['wday'];

    if (isset($_POST['pokaz_date_i_czas'])){ 
    
    if ($dzien_tyg==0) $dzien_tyg="niedziela";
    if ($dzien_tyg==1) $dzien_tyg="poniedziałek";
    if ($dzien_tyg==2) $dzien_tyg="wtorek";
    if ($dzien_tyg==3) $dzien_tyg="środa";
    if ($dzien_tyg==4) $dzien_tyg="czwartek";
    if ($dzien_tyg==5) $dzien_tyg="piątek";
    if ($dzien_tyg==6) $dzien_tyg="sobota";

    switch ($miesiac)
  {
    case 1:$miesiac='styczeń';break;
    case 2:$miesiac='luty';break;
    case 3:$miesiac='marzec';break;
    case 4:$miesiac='kwiecień';break;
    case 5:$miesiac='maj';break;
    case 6:$miesiac='czerwiec';break;
    case 7:$miesiac='lipiec';break;
    case 8:$miesiac='sierpień';break;
    case 9:$miesiac='wrzesień';break;
    case 10:$miesiac='październik';break;
    case 11:$miesiac='listopad';break;
    case 12:$miesiac='grudzień';break;
  }
if ($sek<=9) $sek="0".$sek;
if ($min<=9) $min="0".$min;
if ($godz<=9) $godz="0".$godz;

    echo 'Dzisiaj jest '.$dzien_tyg.', '.$dzien.' '.$miesiac.' '.$rok.' godzina '.$godz.':'.$min.':'.$sek;
    
    /*if (isset($zmienna)) - jeżeli istnieje zmienna
    if (isset($_POST['pokaz_date_i_czas'])) - jeżeli wysłano formularz submitem
    pokaz_date_i_czas*/
    echo '<br />';
    };
    ?>
   
   
   <?php
      $suma=0;
      $ok=true;
      if (isset($_POST['wysyla_na_serwer']))
      {
       $a=$_POST['pole_1'];
       $b=$_POST['pole_2'];
       if (is_numeric($a) && is_numeric($b) && ($ok)) 
       {
        echo 'Liczba a = '.$a.'<br />';
        echo 'Liczba b = '.$b.'<br />';
        echo 'Suma = '.($a+$b); echo '<br />';
        echo 'Różnica = '.($a-$b); echo '<br />';
        echo 'Iloczyn = '.($a*$b); echo '<br />';
        echo 'Iloraz = '.($a/$b).'<br />';
        echo 'Reszta z dzielenia (modulo) = '.($a%$b).'<br />';
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
