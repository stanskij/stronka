<?php
    require_once('top.php');
?>
      <form name="formularz" action="#" onSubmit="return false;">
					<i>Podaj pierwszą liczbę: </i>
					<input type="number" name="liczba1" /><br /><br />
					<i>Podaj drugą liczbę: </i>
					<input type="number" name="liczba2" /><br /><br />
                <div style="display:flex;flex-direction:row;">
                    <button onClick="tabliczka()">wykonaj</button>

                </div>
					<br /><br />
					<output name="wynik"></output>
				</form>
<script>
function tabliczka(){
    var a=parseInt(document.forms['formularz'].liczba1.value);
	var b=parseInt(document.forms['formularz'].liczba2.value);

    document.write("<table border=\"1\" style=\"text-align:right;}\"><tr><td></td>");
      for (i = 1; i <= b; i++){
          document.write("<td>" + i + "</td>");
        }
    document.write("</tr>");
      for (i = 1; i <= a; i++){
          document.write("<tr><td>" + i + "</td>");
              for (j = 1; j <= b; j++){
                        document.write("<td>" + i * j + "</td>");
                        };
               document.write("</tr>");
            };
          document.write("</table>");
          }
       </script>
<?php
require_once('bottom.php');
?>
