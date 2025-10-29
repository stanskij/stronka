<?php
  require_once('top.php');
?>
<div id="test8"><script>pokazLicznik();</script></div>
<script>
    leadingZero = function(element) {
    if (element < 10) return element = "0" + element;
    return element;
}

pokazLicznik = function() {
    currentYear = (new Date).getFullYear()+1;
    month = 01;
    day = 15;
    dateToday = new Date();

    //rok, miesiąc, dzień, godzina, minuta
    
    bardzoWaznaData = new Date(currentYear, month-1, day, 8, 00);
    msInADay = 24 * 60 * 60 * 1000; //1 dzień w milisekundach - to w nich przecież zwracany czas metodą getTime

    timeDifference = (bardzoWaznaData.getTime() - dateToday.getTime());

    eDaysToDate = timeDifference / msInADay;
    daysToDate = Math.floor(eDaysToDate);

    //musimy tutaj sprawdzić, czy powyższa zmienna nie jest 0,
    //bo inaczej poniżej byśmy mieli % 0 czyli dzielenie przez 0
    if (daysToDate < 1) {
        daysToDateFix = 1;
    } else {
        daysToDateFix = daysToDate;
    }

    eHoursToDate = (eDaysToDate % daysToDateFix)*24;
    hoursToDate = Math.floor(eHoursToDate);

    eMinutesToDate = (eHoursToDate - hoursToDate)*60;
    minutesToDate = Math.floor(eMinutesToDate);

    eSecondsToDate = Math.floor((eMinutesToDate - minutesToDate)*60);
    secondsToDate = Math.floor(eSecondsToDate);

    tekst = `<p>Data egzaminu zawodowego - 15.01.2022 godzina 8:00</p><p> Do egzaminu pozostało (wersja 1):</p> ${daysToDate} dni, ${hoursToDate} godzin, ${minutesToDate} minut i ${leadingZero(secondsToDate)} sekund`;

    element = document.getElementById('test8');

    //jeżeli czas się skończył
        timeDiff = bardzoWaznaData - dateToday;
        if (timeDiff < 0) {
            element.innerHTML = 'Czas minął';
        } else {
            element.innerHTML = tekst;

            setTimeout(function() {
                pokazLicznik()
            }, 1000);
        }
    }

pokazLicznik();
</script>    
<p>Do egzaminu zostało (wersja 2):</p>
<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 15, 2022 8:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + " dni, " + hours + " godzin, "
  + minutes + " minut, " + seconds + " sekund ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>


<?php
  require_once('bottom.php');
?>