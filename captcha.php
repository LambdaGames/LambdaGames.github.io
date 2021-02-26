<?php
session_start();

$code = rand(100,999);
$_SESSION['code'] = $code;

$img = imagecreate(100,30);

$font = 'font/28DaysLater.ttf';

$bg = imagecolorallocate($img,255,0,0);
$textcolor = imagecolorallocate($img,0,0,0);

imagestring($img, $font, 5,5, $code, $textcolor);
//imagettftext($img, 23, 0, 3, 30, $textcolor, $font, $_SESSION['captcha']);
imagejpeg($img);
imagedestroy($img);
?>
