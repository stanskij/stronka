<?php
  require_once('top.php');
?>

<p>Metody obiektu string</p>
    <p>
       <script>
        document.write('Obiekt string służy do przechowywania znaków tekstowych<br />'.bold());
        document.write('<p>Ilość znaków tekstu (): <b>Ala ma kota</b> to: ');
        document.write('Ala ma kota'.length+"</p>");
        document.write('<p>Tekst powiększony: <b>Ala ma kota</b> to: ');
        document.write('Ala ma kota'.big()+"</p>");
        document.write('Ala ma kota'.blink()+'<br />');
        document.write('Ala'+' ma'.sub() + ' kota'+'<br />');
        document.write('Ala'+' ma'.sup() + ' kota'+'<br />');
        document.write('Ala ma kota'.fixed()+'<br />');
        document.write('Ala ma kota'.italics()+'<br />');
        document.write('Ala ma kota'.small()+'<br />');
        document.write('Ala ma kota'.strike()+'<br />');
        document.write('Ala ma kota'.fontcolor('red')+'<br />');
        document.write('Ala ma kota'.fontsize(36).fontcolor('#a0c')+'<br />');
        document.write('Ala ma kota'.fontcolor('red')+'<br />');
        document.write('Ala ma kota'.fontcolor('red')+'<br />');
        document.write('Ala ma kota'.fontcolor('red')+'<br />');
        document.write('Ala ma kota'.fontcolor('red')+'<br />');
        document.write('Ala ma kota'.fontcolor('red')+'<br />');
       </script>
    </p>

<?php
  require_once('bottom.php');
?>