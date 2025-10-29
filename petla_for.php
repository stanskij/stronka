<?php
	require_once('top.php');
?>
      <script>
        document.write("<table border=\"1\" style=\"text-align:right;}\"><tr><td></td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr>");
        for (i = 1; i <= 10; i++){
               document.write("<tr><td>" + i + "</td>");
                 for (j = 1; j <= 10; j++){
                        document.write("<td>" + i * j + "</td>");
                        };
               document.write("</tr>");
            };
          document.write("</table>");
       </script>
 <?php
	require_once('bottom.php');
?>