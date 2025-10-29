<?php
require_once('top.php');
?>
<form action="" method="post">
      podaj liczbę  <input type="text" name="pole_1" />
                    <input type="submit" name="wysyla_na_serwer" value="Oblicz n! (n silnia)" />
</form>  
<?php
if (isset($_POST['wysyla_na_serwer'])){
$n=$_POST['pole_1'];//odbieramy wartość wysłaną formularzem
if ($n==0) echo '0! (0 silnia) = 1'; // 0!=1 (zero silnia równa się jeden)
else
{
  $silnia=1;
  for ($i=1;$i<=$n;$i++)//np. 4!=1*2*3*4*5
  $silnia*=$i;      //$silnia=$silnia*$i,  $s+=$i -> $s=$s+1
  echo $n.'! ('.$n.' silnia) = '.$silnia;//wyświetlamy wynik
}
}
?>
    <?php
require_once('bottom.php');
?>
