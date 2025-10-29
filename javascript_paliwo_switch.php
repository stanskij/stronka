<?php
require_once('top.php');
?>
		
		<div id="content" style="padding-left:auto; padding-right:auto;">
        <h1>Oblicz koszt paliwa</h1>
        <i>Rodzaj paliwa (1-benzyna, 2-olej napędowy): </i><br />
        <input type="number" id="liczba1" min="0" max="2" /><br />
        <i>Ile litrów: </i><br />
        <input type="number" id="liczba2" min="1" /><br />
        <button onClick="f()">oblicz</button><br />

<p id="wynik"></p>
    <script>
        function f()
        {
        var a = parseInt(document.getElementById("liczba1").value);
        var b = parseInt(document.getElementById("liczba2").value);
        if (isNaN(a) || isNaN(b)){
            document.getElementById("wynik").innerHTML = "Wypełnij formularz ";
        }
        else 
        {
            switch(a)
            {
                case 1: 
                    document.getElementById("wynik").innerHTML = "Cena paliwa: " + (b*4) + " zł";
                    break;
                case 2: 
                    document.getElementById("wynik").innerHTML = "Cena paliwa: " + (b*3.5) + " zł";
                    break;
                default: document.getElementById("wynik").innerHTML = "Cena paliwa 0 zł";
            }
        }
    }
    </script>
    </div>
    <?php
    require_once('bottom.php');
    ?>   