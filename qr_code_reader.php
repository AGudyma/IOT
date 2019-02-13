<?php



//use Zxing\QrReader;

//include_once "php-qrcode-detector-decoder-master/lib/";


use Zxing\QrReader;

//$qrcode = new QrReader('\qr_barcodes\samplejpg.jpg');
var_dump(scandir('qr_barcodes'));
$files = scandir('qr_barcodes');
//$text = $qrcode->text(); //return decoded text from QR Code
foreach ($files as $file) {


    echo $file.'<br>';
}