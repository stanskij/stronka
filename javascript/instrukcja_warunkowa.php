  <?php
  require_once('././top.php');
?>
    <p><script>
   var x = prompt("Podaj liczbę", "");
       x = (x%2==0) ? "parzysta" : "nieparzysta";
       document.write("x to liczba " + x);
    </script></p>
<?php
    require_once('././bottom.php');
?>