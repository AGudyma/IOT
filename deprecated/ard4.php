<?php
$device = "COM4";
exec("mode $device BAUD=115200 PARITY=n DATA=8 STOP=1 xon=off octs=off rts=on");
$comport = fopen($device, "wb+");
fwrite($fp, "string to send"); //write string to serial
fputs($comport,'test'.chr(22).chr(252));
$buffer = fread($fp,1);

echo "Read from buffer: $buffer";

fclose($comport);