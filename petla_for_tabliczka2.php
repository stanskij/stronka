<?php
    require_once('top.php');
?>

					<i>Podaj pierwszą liczbę: </i>
					<input type="number" id="liczba1" /><br /><br />
					<i>Podaj drugą liczbę: </i>
					<input type="number" id="liczba2" /><br /><br />
                <div style="display:flex;flex-direction:row;">
                    <button onClick="tabliczka()">wykonaj</button>

                </div>
					<br /><br />
                <p id="wynik"></p>
<script src="function_tabliczka.js"></script>
<?php
require_once('bottom.php');
?>
