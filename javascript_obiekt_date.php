<?php
  require_once('top.php');
?>
<p>Metody obiektu date i time</p>
    <p>
       <script>
        var d = new Date(Date.now());
            document.write(d+'<br />');
            document.write('Dzisiaj jest '+d.getDay()+' dzień tygodnia, '+d.getDate()+'.');
            document.write((d.getMonth()+1)+'.');
            document.write(d.getFullYear()+'<br />');

            
       </script>
<p id="zegar"></p>

<form name="clock" onSubmit="0">
  <input type="text" name="face" size="50">
</form>
       <script>
           showtime();
           function showtime()
{
    var now = new Date();
    var months = ["stycznia","lutego","marca","kwietnia","maja","czerwca","lipca","sierpnia","września","października","listopada","grudnia"];
    var dayweek = ["niedziela","poniedziałek","wtorek","środa","czwartek","piątek","sobota"];
    var day = now.getDate();
    var month = now.getMonth();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    
    var timeValue = "Dzisiaj jest " + dayweek[now.getDay()] + ", ";
    
    timeValue += day + " ";
    timeValue += months[now.getMonth()];
    timeValue += ", godzina " + hours;
    timeValue  += ((minutes < 10) ? ":0" : ":") + minutes;
    timeValue  += ((seconds < 10) ? ":0" : ":") + seconds;
    document.clock.face.value = timeValue;
    timerID = setTimeout("showtime()",1000);
    timerRunning = true;
}
       </script>
    </p>
    <p>
        <body onload="odliczanie();">
        <div id="zegar"></div> 
        <script>
            function odliczanie()
	{
		var dzisiaj = new Date();
    var months = ["stycznia","lutego","marca","kwietnia","maja","czerwca","lipca","sierpnia","września","października","listopada","grudnia"];
    var dayweek = ["niedziela","poniedziałek","wtorek","środa","czwartek","piątek","sobota"];
    var dzien_tyg = dayweek[dzisiaj.getDay()];
		var dzien = dzisiaj.getDate();
		var miesiac = months[dzisiaj.getMonth()]+1;
		var rok = dzisiaj.getFullYear();
		var godzina = dzisiaj.getHours();
		if (godzina<10) godzina = "0"+godzina;
		var minuta = dzisiaj.getMinutes();
		if (minuta<10) minuta = "0"+minuta;
		var sekunda = dzisiaj.getSeconds();
		if (sekunda<10) sekunda = "0"+sekunda;
		document.getElementById("zegar").innerHTML = 
		(dzien_tyg+1)+', '+dzien+"/"+miesiac+"/"+rok+" | "+godzina+":"+minuta+":"+sekunda;
		setTimeout("odliczanie()",1000);
	}
        </script>
    </p>


<?php
  require_once('bottom.php');
?>