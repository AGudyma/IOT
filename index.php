<?php

	include("connectPDO.php");
	

?>

<html>
   <head>
      <title>Sensor Data</title>
   </head>
<body>
   <h1>Temperature / moisture sensor readings</h1>

   <table border="1" cellspacing="1" cellpadding="1">
		<tr>
			<td>&nbsp;Timestamp&nbsp;</td>
			<td>&nbsp;id </td>
			<td>&nbsp;message</td>
		</tr>

      <?php
      echo "select from DB"."<br>";
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
//		     while($row = mysql_fetch_array($result)) {
//		        printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>",
//		           $row["timeStamp"], $row["temperature"], $row["humidity"]);
//		     }
//		     mysql_free_result($result);
//		     mysql_close();/
//		  }
      ?>

   </table>
</body>
</html>
