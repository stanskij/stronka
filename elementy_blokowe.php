<?php
require_once('top.php');
?>

<h1>Elementy blokowe</h1>
<hr />
<div style="background-color: rgba(66, 74, 152, 0.46);padding:10px;">
    <figure>
        <img src="img/euglena.jpg" width="500" height="300" alt="Budowa eugleny zielonej" />
        <figcaption>
            <h6>Rysunek 1. Budowa eugleny zielonej</h6>
        </figcaption>
    </figure>
</div>
<hr />
<div style="background-color: rgba(238, 236, 128, 0.46);padding:10px;">
<p>
<h4>To jest akapit</h4> 
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
<p>
</div>
<h5>
    Przykład cytatu
</h5>
    <blockquote cite="http://www.teacher.webd.pl/kurs_html5/">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, 
    scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. 
    Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis 
    vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. 
    Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus 
    leo non est. 	
  </blockquote>  
</p>
</p>
<hr />	
<h5>Listy numerowane i nienumerowane</h5>
<ol>
    <li>
      Punkt 1 listy numerowanej ma dwa podpunkty numerowane.
        <ol>
            <li>
                Ten podpunkt listy numerowanej ma dwa wypunktowania:
                <ul>
                    <li>pierwsze wypunktowanie,</li>
                        
                    <li>drugie wypunktowanie.</li>
                </ul>
            </li>
            <li>Ten podpunkt listy numerowanej nie ma podpunktów.</li>
        </ol>
    </li>
    <li>
      Punkt 2 listy numerowanej ma podpunkty:
      <ul>
        <li>podpunkt 1,</li>
        <ul>
            <li>pierwsze wypunktowanie,</li>
                <li>drugie wypunktowanie.</li>
            </ul>
        <li>podpunkt 2.</li>
      </ul>
    </li>
    <li>Punkt 3 listy numerowanej nie ma podpunktów.</li>
</ol>
<hr />
<dl>
    <h5>Lista definicji</h5>
    <dt>Pierwszy tekst do opisania (zdefiniowania)</dt>
    <dd>Opis (definicja) tekstu pierwszego</dd>
    <dt>Drugi tekst do opisania (zdefiniowania)</dt>
    <dd>Opis (definicja) tekstu drugiego</dd>
  </dl>
  <hr />
 <h5>użycie znacznika ..pre.. </h5>

<pre>
            --------------
            |   Litery   |
            --------------
            | a |  b | c |        coś tam
            | d |  e | f |
            | i |  j | k |
            --------------
</pre>
<hr />
<?php
require_once('bottom.php');
?>