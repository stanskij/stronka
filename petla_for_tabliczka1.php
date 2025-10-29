<?php
    require_once('top.php');
?>
<form name="formularz" action="#">
					<i>Podaj pierwszą liczbę: </i>
					<input type="number" min="1" max="10" id="liczba1" /><br /><br />
					<i>Podaj drugą liczbę: </i>
					<input type="number" min="1" max="10" id="liczba2" /><br /><br />
                <div style="display:flex;flex-direction:row;">
                    <button onClick="tabliczka()">wykonaj</button>

                </div>  
					<br /><br />
					

                <p id="wynik"></p>
                                </form>
<script>

function tabliczka() {
    var a=parseInt(document.getElementById("liczba1").value);       
	var b=parseInt(document.getElementById("liczba2").value);
    if (isNaN(a) || isNaN(b))
            document.getElementById("wynik").innerHTML = "Wypełnij formularz "; 
        
    else{
 
        document.getElementById("wynik").innerHTML = "<table><tr><td></td>";
            for (i = 1; i <= b; i++){
                document.getElementById("wynik").innerHTML = "<td>"+i+"</td>";
                }
            document.getElementById("wynik").innerHTML = "</tr>";
            for (i = 1; i <= a; i++){
                document.getElementById("wynik").innerHTML = "<tr><td>"+i+"</td>";
                    for (j = 1; j <= b; j++){
                        document.getElementById("wynik").innerHTML = "<td>"+i*j+"</td>";
                        };
                document.getElementById("wynik").innerHTML ="</tr>";
                };
            document.getElementById("wynik").innerHTML = "</table>";
        }
        }
       </script>
<?php
require_once('bottom.php');
?>
