<?php
include 'PhpSerial.php';
$serial = new PhpSerial;
$serial->deviceSet("COM4");
$serial->confBaudRate(9600);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->confFlowControl("none");

$serial->deviceOpen();

for (;1;)
{
    $serial->sendMessage("Hello say!");
}

echo "I've sended a message! \n\r";
?>