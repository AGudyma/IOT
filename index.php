<?php

	include("connectPDO.php");

include("processingController.php");


?>

<html>
   <head>
      <title>Sensor Data</title>


   </head>
<body>
   <h1>ESP readings</h1>
   <a href="processingController.php">process recieved data</a>
   <br/>
   <table border="1" cellspacing="1" cellpadding="1">
		<tr>
			<td>&nbsp;Timestamp&nbsp;</td>
			<td>&nbsp;id </td>
			<td>&nbsp;message</td>
		</tr>

      <?php
      echo "selected from DB"."<br>";
//      var_dump($result);

		  if($result!==FALSE){

             foreach ($result as $point) {
//                  echo $point[0];
//                  var_dump($point);
//                  echo "<br>";
                  printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>",
                      $point["recorded"], $point["num"], $point["message"]);
              }
          }

      ?>

   </table>
</body>
</html>
