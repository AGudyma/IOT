<?php
$content='';
exec("mode com4: BAUD=115200 PARITY=n DATA=8 STOP=1 to=off dtr=off rts=off");
$fp =fopen("com4", "r+");
//$fp = fopen('/dev/ttyUSB0','r+'); //use this for Linux
fwrite($fp, "string to send"); //write string to serial
echo fgetc($fp);

fclose($fp);