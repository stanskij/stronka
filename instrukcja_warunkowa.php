  <?php
  require_once('top.php');
?>
    <p><script>
   var x = prompt("Podaj liczbę", "");
       z = (x%2==0) ? "parzysta" : "nieparzysta";
       document.write(x + " to liczba " + z);
    </script></p>
<?php
    require_once('bottom.php');
?>