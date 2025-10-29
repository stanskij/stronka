  <?php
  require_once('top.php');
?>
    <div id="content">
			<h1>PODSTAWOWE DZIAŁANIA MATEMATYCZNE</h1>
				<form name="formularz" onSubmit="return false;">
					<i>Podaj pierwszą liczbę: </i>
					<input type="number" name="liczba1" /><br /><br />
					<i>Podaj drugą liczbę: </i>
					<input type="number" name="liczba2" /><br /><br />
                <div style="display:flex;flex-direction:row;">
                    <button onClick="kalkulatorek(1)">DODAWANIE</button>
					<button onClick="kalkulatorek(2)">ODEJMOWANIE</button>
					<button onClick="kalkulatorek(3)">MNOŻENIE</button>
                    <button onClick="kalkulatorek(4)">DZIELENIE</button>
                </div>
					<br /><br />
					<output name="wynik"></output>
				</form>
	</div>
    <p><script>
        function kalkulatorek(x)
			{
				var a=parseInt(document.forms['formularz'].liczba1.value);
				var b=parseInt(document.forms['formularz'].liczba2.value);
				var wynik_ob=document.forms['formularz'].wynik;
				var napis='';
				if (isNaN(a) || isNaN(b)) napis='Proszę uzupełnić wszystkie dane'; else
				if (x==4 && b==0) napis='Nie wolno dzielić przez zero'; else
				{
					var wynik;
					if (x==1) wynik=a+b; else
					if(x==2) wynik=a-b; else
					if(x==3) wynik=a*b; else
					wynik=a/b;
					napis='Wynik działania: '+wynik;
				}
				wynik_ob.value=napis;
            }
    </script></p>
<?php
    require_once('bottom.php');
?>