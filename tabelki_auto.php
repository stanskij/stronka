<?php
require_once('top.php');
?>
<style type="text/css">
.Clickable{cursor:pointer;color:Blue}
.Clickable:hover{text-decoration:underline}
table,th,td{border:1px solid black;}
table{border-collapse:collapse;}
td{padding:0px 5px}
th,th+th+th{width:40px;background:#A0A0FF}
th+th{width:100px}
</style>
<input type="button" onclick="AddRow()" value="Dodaj"/>
<table id="myTable">
<tr><th>#</th><th>Wartość</th><th></th></tr>
<tr><td>1</td><td>Wartość 1</td><td class="Clickable">Usuń</td></tr>
</table>
<script type="text/javascript">
var tbl = document.getElementById("myTable");
for (var i=1; i<tbl.rows.length; i++){
  tbl.rows[i].cells[2].addEventListener("click",RemoveRow,false);
}

function AddRow(){
  var row = tbl.insertRow(tbl.rows.length);
  row.insertCell(0).innerHTML = tbl.rows.length-1;
  row.insertCell(1).innerHTML = "Wartość "+Math.floor(Math.random()*1000);
  cell = row.insertCell(2);
  cell.innerHTML = "Usuń";
  cell.className = "Clickable";
  cell.addEventListener("click",RemoveRow,false);
}
function RemoveRow(e){
  var rowID=parseInt(this.parentNode.cells[0].innerHTML);
  tbl.deleteRow(rowID);
  ApplyNumeration();
}
function ApplyNumeration(){
  for (var i=1; i<tbl.rows.length; i++){
    tbl.rows[i].cells[0].innerHTML = i;
  }
}
</script>
<?php
require_once('bottom.php');
?>