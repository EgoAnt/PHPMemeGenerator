<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
header ("Content-type: image/jpeg"); 
$im = imagecreatefromjpeg($_GET['imgurl']);

$w = imagesx($im);
$h = imagesy($im);

$ttSize = 50;
$btSize = 30;

$topText = $_GET['toptext'];
$botText = $_GET['bottomtext'];

$font = 'impact.ttf';

$ttb = imagettfbbox($ttSize, 0, $font, $topText);
$tx = ceil(($w - $ttb[2]) / 2);
imagettftext($im, $ttSize, 0, $tx + 4, 64, 0x000000, $font, $topText);
imagettftext($im, $ttSize, 0, $tx, 60, 0xFFFFFF, $font, $topText);

$btb = imagettfbbox($btSize, 0, $font, $botText);
$bx = ceil(($w - $btb[2]) / 2);
imagettftext($im, $btSize, 0, $bx + 4, $h - 10 + 4, 0x000000, $font, $botText);
imagettftext($im, $btSize, 0, $bx, $h - 10, 0xFFFFFF, $font, $botText);


imagejpeg($im);
imagedestroy ($text);

imagedestroy($im);
?>