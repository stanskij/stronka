  <?php
  require_once('top.php');
?>
    <div id="content" style="padding-left:auto; padding-right:auto;">
<h1>Obliczanie pierwiastków trójmianu kwadratowego</h1>
        <i>Podaj a: </i><input type="number" id="liczba1" /><br />
        <i>Podaj b: </i><input type="number" id="liczba2" /><br />
        <i>Podaj c: </i><input type="number" id="liczba3" /><br /><br />
        <button onClick="f()">oblicz</button><br />

<p id="wynik"></p>
    <script>
        function f()
        {
        var a = parseFloat(document.getElementById("liczba1").value);
        var b = parseFloat(document.getElementById("liczba2").value);
        var c = parseFloat(document.getElementById("liczba3").value);
        if (isNaN(a) || isNaN(b) || isNaN(c))
            document.getElementById("wynik").innerHTML = "Wypełnij formularz ";
        else {
            var delta = b * b - 4 * a * c;
            if (delta<0)
            {
                document.getElementById("wynik").innerHTML = "delta = " + delta + " - brak pierwiastków rzeczywistych";
            }
			else if (delta==0)
            {
				x0=-b/(2*a);
                document.getElementById("wynik").innerHTML = "delta = " + delta + " - istnieje jeden pierwiastek podwójny x<sub>o</sub>= "+x0;
			}
            else
            {
				x1=(-b-Math.sqrt(delta))/(2*a);
                x2=(-b+Math.sqrt(delta))/(2*a);
				document.getElementById("wynik").innerHTML ='delta = ' + delta + ' - istnieją dwa pierwiastki: x<sub>1</sub>= '+x1+ ', x<sub>2</sub>= '+x2;
            }
            }
        }
    </script>
    </div>
<?php
    require_once('bottom.php');
?>