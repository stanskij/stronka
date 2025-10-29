<?php
    require_once("top.php");
?>
Podaj zakres w poziomie: <input type="number" id="row"/><br />
Podaj zakres w pionie: <input type="number" id="col"/><br />

<button onclick="myCreateFunction()">Utwórz tabelę</button><br />
<table id="mojaTabela">
  
  </table>

<script type="text/javascript">

function myCreateFunction() {
  var table = document.getElementById("mojaTabela");
  var rows = parseInt(document.getElementById("row").value);
  var cols = parseInt(document.getElementById("col").value);
  for (var i=0; i<rows; i++){
      var row = table.insertRow(i);
        for (var j=0; j<cols; j++){
          var cell = row.insertCell(j);
              cell.innerHTML = (i+1)*(j+1);
    }
  }

}

</script>
<?php
    require_once("bottom.php");
?>